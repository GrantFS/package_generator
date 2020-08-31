<?php

namespace Loopy\PackageGenerator\Commands

use App\Console\Commands\PackageGenerator\PackageGenerator;

class PackageFoldersCommand extends PackageGenerator
{
    protected $signature = 'package:folders {name}';
    protected $description = 'Laravel Package Folders';

    public function getStub()
    {
        return base_path() . '/resources/assets/stubs/RoutesStub.phpStub';
    }

    protected function getPath($name)
    {
        return $this->root_path . '/' . $this->directory . '/src/routes.php';
    }

    public function handle()
    {
        $name = $this->argument('name');
        $this->splitName($name);

        $this->makeDirectory($this->getViewPath());
        $this->makeDirectory($this->getMigrationsPath());
        $this->makeDirectory($this->getPublicPath());
        $this->makeDirectory($this->getResourcesPath() . '/js/components/package');
        $this->makeDirectory($this->getResourcesPath() . '/js/vendor/package');
        parent::handle();
    }

    protected function getViewPath()
    {
        return $this->root_path . '/' . $this->directory . '/src/Views/publish/package';
    }

    protected function getMigrationsPath()
    {
        return $this->root_path . '/' . $this->directory . '/src/Database/Migrations/package';
    }

    protected function getPublicPath()
    {
        return $this->root_path . '/' . $this->directory . '/src/Public/package';
    }

    protected function getResourcesPath()
    {
        return $this->root_path . '/' . $this->directory . '/resources';
    }
}
