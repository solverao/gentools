<?php

namespace Solverao\Gentools\Tests\Feature;

use Solverao\Gentools\Tests\TestCase;

class CanGetModulesTest extends TestCase
{
    /** @test */
    function can_make_repository()
    {
        $this->withoutExceptionHandling();

        $spy = $this->spy(Filesystem::class);

        $this->get('storage-link')->assertSee('The [public/storage] directory has been linked.');

        $spy->shouldHaveReceived('link')->with(
            storage_path('app/public'), public_path('storage')
        );

        $spy->shouldHaveReceived('exists')->with(
            public_path('storage')
        );
    }

     /** @test */
     function can_make_presenter()
     {
         $this->withoutExceptionHandling();
 
         $spy = $this->spy(Filesystem::class);
 
         $this->get('storage-link')->assertSee('The [public/storage] directory has been linked.');
 
         $spy->shouldHaveReceived('link')->with(
             storage_path('app/public'), public_path('storage')
         );
 
         $spy->shouldHaveReceived('exists')->with(
             public_path('storage')
         );
     }
}
