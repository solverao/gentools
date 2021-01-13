<?php

namespace Solverao\Gentools\Tests;

use Solverao\Gentools\ReposServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ReposServiceProvider::class
        ];
    }
}
