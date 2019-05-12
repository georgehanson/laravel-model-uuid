<?php

namespace GeorgeHanson\LaravelModelUuid\Tests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    /**
     * Set the test.
     */
    public function setUp()
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/factories');
    }

    /**
     * Get the package providers
     */
    protected function getPackageProviders($app)
    {
        return [
        ];
    }

    /**
     * Setup the testing environment
     *
     * @param  [type] $app [description]
     * @return [type]      [description]
     */
    protected function getEnvironmentSetUp($app)
    {
        Hash::setRounds(4);
    }
}