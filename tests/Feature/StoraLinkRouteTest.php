<?php

namespace Semovicdmx\Pretools\Tests\Feature;

use Illuminate\Filesystem\Filesystem;
use Semovicdmx\Pretools\Tests\TestCase;

class StoraLinkRouteTest extends TestCase
{
    /** @test */
    function can_create_the_storage_link_from_a_route()
    {
        $this->withoutExceptionHandling();

        $spy = $this->spy(Filesystem::class);

        $this->get('gentools/storage-link')->assertSee('The [public/storage] directory has been linked.');

        $spy->shouldHaveReceived('link')->with(
            storage_path('app/public'), public_path('storage')
        );

        $spy->shouldHaveReceived('exists')->with(
            public_path('storage')
        );
    }

    /** @test */
    function cannot_try_to_create_the_storage_link_twice()
    {
        $this->mock(Filesystem::class)->shouldReceive('exists')->andReturn(true);

        $this->get('gentools/storage-link')->assertSee('The public/storage directory already exists.');
    }
}
