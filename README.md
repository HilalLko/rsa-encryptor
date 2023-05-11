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

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="rsa-encryptor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="rsa-encryptor-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="rsa-encryptor-views"
```

## Usage

```php
$rsaEncryptor = new Hilal\RsaEncryptor();
echo $rsaEncryptor->echoPhrase('Hello, Hilal!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [HILAL RAUF](https://github.com/HilalLko)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
