<?php

namespace Hrmsh\FeatureChecklist;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class FeatureChecklistServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();
        $this->registerViews();
        $this->registerBladeDirectives();

        $this->publishes([
            __DIR__.'/../dist/feature-checklist' => public_path('vendor/feature-checklist'),
        ], 'public');
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
            return "<div id='features'></div>
            <script>
                (function(d, s, id){
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {return;}
                    js = d.createElement(s); js.id = id;
                    js.src = '/vendor/feature-checklist/js/sdk.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'feature-checklist-sdk'));
            </script>";
        });   
    }

    public function registerRoutes()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/../routes.php';
        }
    }
}