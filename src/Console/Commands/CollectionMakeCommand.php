<?php

namespace Solverao\Gentools\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class ServiceMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:collection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Repositories Collection trait';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Collection';
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(){
        return __DIR__ . '/../Stubs/collection.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . config('gentools.collection.namespace','\Repositories\Collections');
    }
}
