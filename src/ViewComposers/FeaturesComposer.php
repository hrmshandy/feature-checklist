<?php

namespace Hrmsh\FeatureChecklist\ViewComposers;

use Hrmsh\FeatureChecklist\Feature;


class FeaturesComposer 
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('features', Feature::all());
    }
}