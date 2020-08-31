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

namespace\package_name\PackageNameServiceProvider::class

```


## Create the package

```

  php artisan make:package [namespace/package_name]

```
