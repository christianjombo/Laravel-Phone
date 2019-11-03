<?php namespace ChristianJombo\LaravelPhone\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use ChristianJombo\LaravelPhone\PhoneServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * @param \Illuminate\Foundation\Application $application
     * @return array
     */
    protected function getPackageProviders($application)
    {
        return [PhoneServiceProvider::class];
    }
}
