<?php

namespace Hrmsh\FeatureChecklist\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;


class FeaturesController extends Controller
{
    public function index()
    {
        $features = $this->getFeaturesData();

        $features = $features->map(function($item){
            $init = new $item['class'];

            return [
                'label' => $item['label'],
                'status' => $init->check(),
                'visibility' => $item['visibility']
            ];
        })->filter(function($item){
            return $item['visibility'] == 'visible';
        });

        $allStatus = ($features->filter(function($item){
            return $item['status'] == "failed";
        })->count() > 0) ? "failed" : "checked";

        return [
            "allStatus" => $allStatus,
            "items" => $features->all()
        ];
    }

    protected function getFeaturesData()
    {
        $path = __DIR__ . '/../../database/features.json';
        $features = File::get($path);

        $obj = json_decode($features, true);

        return collect($obj);
    }
}