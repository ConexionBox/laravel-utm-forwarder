<?php

namespace ConexionBox\AnalyticsTracker\Sources;

use Illuminate\Http\Request;

class RequestHeader
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $key): ?string
    {
        return $this->request->header($key);
    }
}
