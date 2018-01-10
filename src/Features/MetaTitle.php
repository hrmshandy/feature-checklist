<?php

namespace Hrmsh\FeatureChecklist\Features;

use Hrmsh\FeatureChecklist\Contracts\CheckerInterface;

class MetaTitle implements CheckerInterface
{
    public function check()
    {
        return "checked";
    }
}