<?php

namespace Loopy\PackageGenerator\Commands

use Illuminate\Console\Command;

class NewPackageCommand extends Command
{
    protected $signature = 'make:package {name}';
    protected $description = 'Create a new Laravel package';

    public function handle()
    {
        $name = $this->argument('name');

        $this->call('package:service_provider', ['name' => $name]);
        $this->call('package:class', ['name' => $name]);
        $this->call('package:config', ['name' => $name]);
        $this->call('package:scss_variables', ['name' => $name]);
        $this->call('package:scss', ['name' => $name]);
        $this->call('package:folders', ['name' => $name]);
        $this->call('package:composer', ['name' => $name]);
        $this->call('package:readme', ['name' => $name]);
        $this->call('package:gitignore', ['name' => $name]);
        $this->call('package:controller', ['name' => $name]);

        $view_composer = $this->confirm('Do you require a view composer?', true);
        if ($view_composer) {
            $this->call('package:viewcomposer', ['name' => $name]);
        } else {
            $this->comment('Please remove view()->composer() line from the service provider.');
        }
    }
}
