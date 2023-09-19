<?php

namespace AlexanderPoellmann\LaravelPostPlc;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AlexanderPoellmann\LaravelPostPlc\Commands\LaravelPostPlcCommand;

class LaravelPostPlcServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-post-plc')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-post-plc_table')
            ->hasCommand(LaravelPostPlcCommand::class);
    }
}
