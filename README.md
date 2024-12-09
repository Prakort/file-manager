# This is my package file-manager

[![Latest Version on Packagist](https://img.shields.io/packagist/v/prakort/file-manager.svg?style=flat-square)](https://packagist.org/packages/prakort/file-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/prakort/file-manager/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/prakort/file-manager/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/prakort/file-manager/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/prakort/file-manager/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/prakort/file-manager.svg?style=flat-square)](https://packagist.org/packages/prakort/file-manager)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require prakort/file-manager
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="file-manager-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="file-manager-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$fileManager = new Prakort\FileManager();
echo $fileManager->echoPhrase('Hello, Prakort!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prakort Lean](https://github.com/prakort)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
