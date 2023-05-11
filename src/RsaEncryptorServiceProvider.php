<?php

namespace Hilal\RsaEncryptor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hilal\RsaEncryptor\Commands\RsaEncryptorCommand;

class RsaEncryptorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('rsa-encryptor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_rsa-encryptor_table')
            ->hasCommand(RsaEncryptorCommand::class);
    }
}
