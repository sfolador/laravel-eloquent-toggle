# Add toggles to eloquent models

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sfolador/laravel-eloquent-toggle.svg?style=flat-square)](https://packagist.org/packages/sfolador/laravel-eloquent-toggle)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sfolador/laravel-eloquent-toggle/run-tests?label=tests)](https://github.com/sfolador/laravel-eloquent-toggle/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sfolador/laravel-eloquent-toggle/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sfolador/laravel-eloquent-toggle/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sfolador/laravel-eloquent-toggle.svg?style=flat-square)](https://packagist.org/packages/sfolador/laravel-eloquent-toggle)


## Installation

You can install the package via composer:

```bash
composer require sfolador/laravel-eloquent-toggle
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-eloquent-toggle-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-eloquent-toggle-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-eloquent-toggle-views"
```

## Usage

```php
$laravelEloquentToggle = new Sfolador\LaravelEloquentToggle();
echo $laravelEloquentToggle->echoPhrase('Hello, Sfolador!');
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

- [sfolador](https://github.com/sfolador)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
