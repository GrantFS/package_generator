<?php

namespace Loopy\PackageGenerator\Commands;

use Symfony\Component\Console\Input\InputArgument;

class PackageClassCommand extends PackageGenerator
{
    protected $signature = 'package:class {name}';
    protected $description = 'Create a Laravel Package Class';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ClassStub.phpStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/src/Services/' . $this->base_class_name . '.php';
    }
}
