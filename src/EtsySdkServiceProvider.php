<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk;

use Hdecom\EtsySdk\Commands\EtsySdkCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
//            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_laravel_etsy_sdk_table')
            ->hasCommand(EtsySdkCommand::class);
    }
}
