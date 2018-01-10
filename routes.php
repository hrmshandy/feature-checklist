<?php

Route::group(['prefix' => 'features', 'namespace' => 'Hrmsh\FeatureChecklist\Controllers'], function(){
    Route::get('/', 'FeaturesController@index');
});