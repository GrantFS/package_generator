<?php

namespace Loopy\PackageGenerator\Commands;

use App\Console\Commands\PackageGenerator\PackageGenerator;
use Symfony\Component\Console\Input\InputArgument;

class PackageConfigCommand extends PackageGenerator
{
    protected $signature = 'package:config {name}';
    protected $description = 'Create a Laravel Package Config';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ConfigStub.phpStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/src/Config/' . snake_case($this->base_class_name) . '.php';
    }
}
