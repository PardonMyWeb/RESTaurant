<?php

namespace PardonMyWeb\RESTaurant;

use PardonMyWeb\RESTaurant\Commands\RESTaurantCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RESTaurantServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('restaurant')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_restaurant_table')
            ->hasCommand(RESTaurantCommand::class);
    }
}
