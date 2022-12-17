<?php

namespace Sfolador\LaravelEloquentToggle;

use Sfolador\LaravelEloquentToggle\Commands\LaravelEloquentToggleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelEloquentToggleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-eloquent-toggle');
    }
}
