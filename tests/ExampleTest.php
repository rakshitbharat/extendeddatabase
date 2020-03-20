<?php

namespace Rakshitbharat\ExtendedDatabase\Tests;

use Orchestra\Testbench\TestCase;
use Rakshitbharat\ExtendedDatabase\ExtendedDatabaseServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ExtendedDatabaseServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
