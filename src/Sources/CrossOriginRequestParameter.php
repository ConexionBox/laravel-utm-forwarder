<?php

namespace ConexionBox\AnalyticsTracker\Sources;

use ConexionBox\AnalyticsTracker\Helpers\Request;

class CrossOriginRequestParameter extends RequestParameter
{
    public function get(string $key): ?string
    {
        if (! Request::isCrossOrigin($this->request)) {
            return null;
        }

        return parent::get($key);
    }
}
