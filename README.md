# Package Generator

A quick and simple way to create a new Laravel package, complete with folder structure and basic templating.

## Installation

Add the repository to the package.json file

```

"repositories": [{
    "url": "https://github.com/GrantFS/package_generator.git",
    "type": "vcs"
}]

```

Require in composer

```

 composer require loopy/package_generator


```

In config/app.php under providers

```

Loopy\PackageGenerator\PackageGeneratorServiceProvider::class

```

In App\Console\Kernel

```

 protected $commands = [
        'Loopy\PackageGenerator\Commands\PackageServiceProviderCommand',
        'Loopy\PackageGenerator\Commands\PackageClassCommand',
        'Loopy\PackageGenerator\Commands\PackageConfigCommand',
        'Loopy\PackageGenerator\Commands\PackageScssVariablesCommand',
        'Loopy\PackageGenerator\Commands\PackageScssCommand',
        'Loopy\PackageGenerator\Commands\PackageComposerCommand',
        'Loopy\PackageGenerator\Commands\PackageReadmeCommand',
        'Loopy\PackageGenerator\Commands\PackageGitignoreCommand',
        'Loopy\PackageGenerator\Commands\PackageControllerCommand',
        'Loopy\PackageGenerator\Commands\PackageViewComposerCommand',
        'Loopy\PackageGenerator\Commands\PackageFoldersCommand',
        'Loopy\PackageGenerator\Commands\NewPackageCommand'
    ];

```


## Create the package

```

  php artisan make:package [namespace/package_name]

```

## Config

Default Root Directory - Change where the packages are created.  The default is the top level of the project

```

[
  'default_root_directory' => base_path() . '/Packages'
]

```
