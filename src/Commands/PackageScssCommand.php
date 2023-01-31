<?php

namespace Loopy\PackageGenerator\Commands;

use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class PackageScssCommand extends PackageGenerator
{
    protected $signature = 'package:scss {name}';
    protected $description = 'Create a Laravel Package Scss';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ScssStub.scssStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/resources/' . Str::snake($this->base_class_name) . '.scss';
    }
}
