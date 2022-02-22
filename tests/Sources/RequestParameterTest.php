<?php

namespace ConexionBox\AnalyticsTracker\Tests\Sources;

use Illuminate\Http\Request;
use ConexionBox\AnalyticsTracker\Sources\RequestParameter;
use ConexionBox\AnalyticsTracker\Tests\TestCase;

class RequestParameterTest extends TestCase
{
    /** @test */
    public function it_can_get_a_request_parameter()
    {
        $request = new Request([
            'foo' => 'bar',
        ]);

        $this->assertEquals('bar', (new RequestParameter($request))->get('foo'));
    }
}
