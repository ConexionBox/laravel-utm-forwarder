<?php

namespace ConexionBox\AnalyticsTracker\Tests\Sources;

use Illuminate\Http\Request;
use ConexionBox\AnalyticsTracker\Sources\RequestHeader;
use ConexionBox\AnalyticsTracker\Tests\TestCase;

class RequestHeaderTest extends TestCase
{
    /** @test */
    public function it_can_get_a_request_header()
    {
        $request = new Request();
        $request->headers->set('Foo', 'bar');

        $this->assertEquals('bar', (new RequestHeader($request))->get('foo'));
    }
}
