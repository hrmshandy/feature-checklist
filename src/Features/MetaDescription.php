<?php

namespace Hrmsh\FeatureChecklist\Features;

use Hrmsh\FeatureChecklist\Contracts\CheckerInterface;

class MetaDescription implements CheckerInterface
{
    public function check()
    {
        return "checked";
    }
}