<?php

namespace Hrmsh\FeatureChecklist;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class FeatureChecklistServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$this->registerMigrations();
        $this->registerViews();
        $this->registerBladeDirectives();
    }

    public function register()
    {
        //
    }

    protected function registerViews()
    {
        $path = __DIR__ . '/../resources/views/';

        $this->loadViewsFrom($path, 'feature-checklist');
    }

    protected function registerMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    protected function registerBladeDirectives()
    {
        Blade::directive('featurechecklist', function(){
            $features = Feature::all();
            return view("feature-checklist::alerts", compact('features'));
        });   
    }

    protected function registerViewComposer()
    {
        view()->composer(
            'feature-checklist::alerts',
            'Hrmsh\FeatureChecklist\ViewComposers\FeaturesComposer'
        );
    }
}