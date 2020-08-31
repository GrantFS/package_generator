<?php

namespace Loopy\PackageGenerator\Commands

use App\Console\Commands\PackageGenerator\PackageGenerator;
use Symfony\Component\Console\Input\InputArgument;

class PackageScssVariablesCommand extends PackageGenerator
{
    protected $signature = 'package:scss_variables {name}';
    protected $description = 'Create a Laravel Package Scss Variables';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/VariablesStub.scssStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/resources/variables.scss';
    }
}
