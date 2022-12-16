<?php

namespace B4mtech\LaravelBaseEnvoy;

use B4mtech\LaravelBaseEnvoy\Commands\LaravelBaseEnvoyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBaseEnvoyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-base-envoy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-base-envoy_table')
            ->hasCommand(LaravelBaseEnvoyCommand::class);
    }
}
