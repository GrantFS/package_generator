<?php

namespace Loopy\PackageGenerator\Commands

use App\Console\Commands\PackageGenerator\PackageGenerator;
use Symfony\Component\Console\Input\InputArgument;

class PackageComposerCommand extends PackageGenerator
{
    protected $signature = 'package:composer {name}';
    protected $description = 'Create a Laravel Package Composer';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ComposerStub.jsonStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/composer.json';
    }
}
