<?php

namespace Unixar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UnixarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('unixar-common');
        // ->hasConfigFile()
        // ->hasViews()
        // ->hasMigration('create_unixar_common_table');
        // ->hasCommand(ExampleClassCommand::class);
    }
}
