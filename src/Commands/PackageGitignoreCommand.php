<?php

namespace Loopy\PackageGenerator\Commands

use App\Console\Commands\PackageGenerator\PackageGenerator;
use Symfony\Component\Console\Input\InputArgument;

class PackageGitignoreCommand extends PackageGenerator
{
    protected $signature = 'package:gitignore {name}';
    protected $description = 'Create a Laravel Package Gitignore';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/GitignoreStub.Stub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/.gitignore';
    }
}
