<?php

namespace Loopy\PackageGenerator\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

abstract class PackageGenerator extends GeneratorCommand
{
    protected $package_name;
    protected $base_class_name;
    protected $root_path;
    protected $directory;

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    public function handle()
    {
        $name = $this->argument('name');
        $this->splitName($name);
        $path = $this->getPath($name);

        if ($this->files->exists($path)) {
            return $this->error($name . ' already exists!');
        }
        $this->makeDirectory($path);
        $this->files->put($path, $this->buildClass($name));

        $this->info($this->description . ' - Done');
    }

    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)
        ->replaceSnakename($stub, $name)
        ->replaceVendor($stub, $name)
        ->replaceClass($stub, $name);
    }

    protected function replaceClass($stub, $name)
    {
        return str_replace('DummyClass', $this->base_class_name, $stub);
    }

    protected function replaceSnakename(&$stub, $name)
    {
        $stub = str_replace('SNAKENAME', $this->package_name, $stub);
        return $this;
    }

    protected function replaceVendor(&$stub, $name)
    {
        $stub = str_replace('VENDOR', strtolower($this->directory), $stub);
        return $this;
    }

    protected function getNamespace($name)
    {
        $namespace = '';
        $dp = explode('/', $this->argument('name'));

        foreach ($dp as $path) {
            $namespace .=  (!empty($namespace) ? '\\' : '') . ucwords($path);
        }
        return $namespace;
    }

    protected function splitName(string $name)
    {
        $name = str_replace('\\', '/', $name);
        $path = explode('/', $name);
        $last = count($path) - 1;
        $this->package_name = snake_case($path[$last]);
        $this->base_class_name = ucwords($path[$last]);
        unset($path[$last]);
        $this->directory = strtolower(implode('/', $path) . '/' . $this->package_name);
        $this->root_path = str_replace('/laravel_test_environment', '', base_path());
    }

    protected function makeDirectory($path)
    {
        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }
    }
}
