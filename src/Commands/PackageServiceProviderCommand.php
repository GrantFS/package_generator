<?php

namespace Loopy\PackageGenerator\Commands

use App\Console\Commands\PackageGenerator\PackageGenerator;
use Symfony\Component\Console\Input\InputArgument;

class PackageServiceProviderCommand extends PackageGenerator
{
    protected $signature = 'package:service_provider {name}';
    protected $description = 'Create a Laravel Package Service Provider';

    protected function getStub()
    {
        return base_path() . '/resources/assets/stubs/ServiceProviderStub.phpStub';
    }

    protected function getArguments()
    {
        return [
             ['name', InputArgument::REQUIRED, 'The name of the desired Package']
         ];
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/src/' . $this->base_class_name . 'ServiceProvider.php';
    }
}
