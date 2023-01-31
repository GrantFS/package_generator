<?php

namespace Loopy\PackageGenerator\Commands;

use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

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
        return $this->root_path . '/' . $this->directory . '/src/Config/' . Str::snake($this->base_class_name) . '.php';
    }
}
