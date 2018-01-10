<?php

namespace Hrmsh\FeatureChecklist\Features;

use Hrmsh\FeatureChecklist\Contracts\CheckerInterface;

class GoogleAnalytic implements CheckerInterface
{
    public function check()
    {
        $arrContextOptions = array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  

        $content = file_get_contents(url('/'), false, stream_context_create($arrContextOptions));

        if($this->isAnalytics($content)) {
            return "checked";
        }

        return "failed";
    }

    function isAnalytics($str){
        return preg_match("/\bua-\d{4,9}-\d{1,4}\b/i", strval($str)) ? true : false;
    }
}