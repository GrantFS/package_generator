<?php

namespace Loopy\PackageGenerator\Commands;

use Symfony\Component\Console\Input\InputArgument;

class PackageViewComposerCommand extends PackageGenerator
{
    protected $signature = 'package:viewcomposer {name}';
    protected $description = 'Create a Laravel Package ViewComposer';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ViewcomposerStub.phpStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/src/ViewComposers/' . $this->base_class_name . 'Composer.php';
    }
}
