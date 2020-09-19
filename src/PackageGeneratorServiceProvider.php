<?php

namespace Loopy\PackageGenerator;

use Illuminate\Support\ServiceProvider;

class PackageGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/Config/package_generator.php' => config_path('package_generator.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
