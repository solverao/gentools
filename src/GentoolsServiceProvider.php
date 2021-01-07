<?php

namespace Semovicdmx\Gentools;

use Illuminate\Support\ServiceProvider;
use Semovicdmx\Gentools\Services\Validations\GenValidation;
use Semovicdmx\Gentools\Console\Commands\ServiceMakeCommand;
use Semovicdmx\Gentools\Console\Commands\PresenterMakeCommand;
use Semovicdmx\Gentools\Console\Commands\RepositoryMakeCommand;

class GentoolsServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->gentoolsCommands();
        
        $this->gentoolsPublishes();
        
        $this->gentoolsLoads();
    }

    public function register(){
        $this->mergeConfigFrom(
            $this->basePath('config/gentools.php'),
            'gentools'
        );

        $this->gentoolsBind();
    }

    private function basePath($path){
        return __DIR__ . '/../' . $path;
    }

    private function gentoolsCommands(){
        if ($this->app->runningInConsole()) {
            $this->commands([
                RepositoryMakeCommand::class,
                PresenterMakeCommand::class,
                ServiceMakeCommand::class
            ]);
        }
    }

    private function gentoolsPublishes(){
        $this->publishes([
            $this->basePath('config/gentools.php') => base_path('config/gentools.php')
        ], 'gentools-config');
    }

    private function gentoolsLoads(){
        $this->loadRoutesFrom(
            $this->basePath('routes/web.php')
        );
    }

    private function gentoolsBind(){
        $this->app->bind('genval', function(){
            return new GenValidation;
        });
    }
}
