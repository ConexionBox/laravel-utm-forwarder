<?php

namespace ConexionBox\AnalyticsTracker\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use ConexionBox\AnalyticsTracker\AnalyticsTrackerServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            AnalyticsTrackerServiceProvider::class,
        ];
    }
}
