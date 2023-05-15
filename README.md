# Package for Encryption and Decryption using RSA

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hilal/rsa-encryptor.svg?style=flat-square)](https://packagist.org/packages/hilal/rsa-encryptor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hilal/rsa-encryptor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hilal/rsa-encryptor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hilal/rsa-encryptor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hilal/rsa-encryptor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hilal/rsa-encryptor.svg?style=flat-square)](https://packagist.org/packages/hilal/rsa-encryptor)

Package for Encryption and Decryption using public-key encryption algorithm (RSA (Rivest–Shamir–Adleman))

## Installation

You can install the package via composer:

```bash
composer require hilal/rsa-encryptor
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="rsa-encryptor-config"
```

This is the contents of the published config file:

```php
return [
	'public_key_path' => storage_path('app/public_key.pem'),
    'private_key_path' => storage_path('app/private_key.pem'),
];
```

Add the `RsaEncryptionServiceProvider` to the providers array in `config/app.php`.
```php
'providers' => [
        // ...
        \Hilal\RsaEncryptor\RsaEncryptorServiceProvider::class
        // ...
    ],
```
Additionally, you can set Class Aliase in the aliases array in `config/app.php`
```php
'aliases' => [
        // ...
        "RsaEncryptor" => \Hilal\RsaEncryptor\Facades\RsaEncryptor::class,
        // ...
    ],
```

## Public & Private Keys
If you've public & private key add it to `/storage/app` folder.
or if you don't have public & private keys you can generate it using:
```php
openssl genrsa -out private_key.pem 2048
openssl rsa -in private_key.pem -outform PEM -pubout -out public_key.pem
```
Once generated you can move your keys to `/storage/app` folder.

## Usage

Add `RsaEncryptor` class to your
```php
use RsaEncryptor;
```
To Encrypt string
```php
RsaEncryptor::encrypt('Am Hilal');
```
To Encrypt string
```php
RsaEncryptor::decrypt('Encrypted String');
```
  
## Credits

- [HILAL RAUF](https://github.com/HilalLko)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
