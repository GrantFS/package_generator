<?php

namespace Loopy\PackageGenerator\Commands

use App\Console\Commands\PackageGenerator\PackageGenerator;
use Symfony\Component\Console\Input\InputArgument;

class PackageReadmeCommand extends PackageGenerator
{
    protected $signature = 'package:readme {name}';
    protected $description = 'Create a Laravel Package Readme';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ReadmeStub.mdStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/README.md';
    }
}
