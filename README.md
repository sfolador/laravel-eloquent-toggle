
<img src="https://sfolador-github.s3.eu-south-1.amazonaws.com/laravel-eloquent-toggle.png?t=1" alt="Laravel Eloquent Toggle"/>


[![Latest Version on Packagist](https://img.shields.io/packagist/v/sfolador/laravel-eloquent-toggle.svg?style=flat-square)](https://packagist.org/packages/sfolador/laravel-eloquent-toggle)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sfolador/laravel-eloquent-toggle/run-tests.yml?branch=main)](https://img.shields.io/github/actions/workflow/status/sfolador/laravel-eloquent-toggle/run-tests.yml?branch=main)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sfolador/laravel-eloquent-toggle/fix-php-code-style-issues.yml?branch=main&label=code%20style)](https://img.shields.io/github/actions/workflow/status/sfolador/laravel-eloquent-toggle/fix-php-code-style-issues.yml?branch=main)
[![Total Downloads](https://img.shields.io/packagist/dt/sfolador/laravel-eloquent-toggle.svg?style=flat-square)](https://packagist.org/packages/sfolador/laravel-eloquent-toggle)


## Installation

You can install the package via composer:

```bash
composer require sfolador/laravel-eloquent-toggle
```
## Usage

To use a _toggle_ just use casts on your model:

```php
use Illuminate\Database\Eloquent\Model;
use Sfolador\LaravelEloquentToggle\Casts\Boolean;

class User extends Model
{
    protected $casts = [
        'active' => Boolean::class,
    ];
    ...
}
```
then you can use it like this:

```php
$user = new User();
$user->active = true;

$user->active->toggle(); // false

$isActive = $user->active->value(); // false
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
