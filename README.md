# A simplistics log viewer for your Filament apps.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/filament-log.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-log)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-log/run-tests?label=tests)](https://github.com/ryangjchandler/filament-log/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-log/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/filament-log/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/filament-log.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-log)

This package provides a `Logs` page that allows you to view your Laravel log files in a simple UI.

![](./art/screen.png)

## Installation

You can install the package via Composer:

```bash
composer require ryangjchandler/filament-log
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-log-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-log-views"
```

This is the contents of the published config file:

```php
return [

    'paths' => [
        storage_path('logs')
    ],

];
```

## Usage

You should first publish the assets provided by this plugin:

```bash
php artisan vendor:publish --tag=filament-log-assets
```

This will publish the CSS files to `public/vendor/filament-log`.

The `Logs` page will be automatically registed with Filament and appear in your panel.

### Authorization

If you would like to prevent certain users from accessing your page, you should register an authorization callback inside of a `ServiceProvider::boot()` method.

```php
public function boot()
{
    Logs::can(function (User $user) {
        return $user->role === Role::Admin;
    });
}
```

This will prevent the navigation item from being registered.

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

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
