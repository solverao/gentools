<?php

namespace Semovicdmx\Gentools\Tests;

use Semovicdmx\Gentools\ReposServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ReposServiceProvider::class
        ];
    }
}
