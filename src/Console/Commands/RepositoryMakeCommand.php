<?php

namespace Semovicdmx\Gentools\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;
class RepositoryMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Repository class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Repository';

     /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (parent::handle() === false && ! $this->option('force')) {
            return false;
        }

        if ($this->option('interface')) {
            $this->createInterface();
        }
    }

    /**
     * Create a migration file for the model.
     *
     * @return void
     */
    protected function createInterface()
    {
        $table = Str::snake(Str::pluralStudly(class_basename($this->argument('name'))));
            dd($table);
        $this->call('make:interface', [
            'name' => "create_{$table}_table",
            '--create' => $table,
        ]);
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(){
        return __DIR__ . '/../Stubs/repository.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . config('gentools.repository.namespace');
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['all', 'a', InputOption::VALUE_NONE, 'Assign model to repository'],
            ['record', 'r', InputOption::VALUE_NONE, 'Create a new record for the repository'],
            ['decorator', 'd', InputOption::VALUE_NONE, 'Create a new decorator for the repository'],
            ['interface', 'i', InputOption::VALUE_NONE, 'Create a new interface for the repository'],
        ];
    }
}
