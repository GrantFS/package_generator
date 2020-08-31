<?php

namespace Loopy\PackageGenerator\Commands

use App\Console\Commands\PackageGenerator\PackageGenerator;
use Symfony\Component\Console\Input\InputArgument;

class PackageControllerCommand extends PackageGenerator
{
    protected $signature = 'package:controller {name}';
    protected $description = 'Create a Laravel Package Controller';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ControllerStub.phpStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/src/Controllers/' . $this->base_class_name . 'Controller.php';
    }
}
