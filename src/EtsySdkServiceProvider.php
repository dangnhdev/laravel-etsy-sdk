<?php

namespace Hdecom\EtsySdk;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hdecom\EtsySdk\Commands\EtsySdkCommand;

class EtsySdkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-etsy-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_etsy_sdk_table')
            ->hasCommand(EtsySdkCommand::class);
    }
}
