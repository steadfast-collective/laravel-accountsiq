# Laravel AccountsIQ

[![Latest Version on Packagist](https://img.shields.io/packagist/v/steadfastcollective/laravel-accountsiq.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/laravel-accountsiq)
[![Build Status](https://img.shields.io/travis/steadfastcollective/laravel-accountsiq/master.svg?style=flat-square)](https://travis-ci.org/steadfastcollective/laravel-accountsiq)
[![Quality Score](https://img.shields.io/scrutinizer/g/steadfastcollective/laravel-accountsiq.svg?style=flat-square)](https://scrutinizer-ci.com/g/steadfastcollective/laravel-accountsiq)
[![Total Downloads](https://img.shields.io/packagist/dt/steadfastcollective/laravel-accountsiq.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/laravel-accountsiq)

Package to talk to AccountIQ in Laravel.

## Installation

You can install the package via composer:

```bash
composer require steadfastcollective/laravel-accountsiq
```

## Usage

After you have added your API credentials to your `config/accountsiq.php` file, you should be able to fetch data like this:

```php
return (new \SteadfastCollective\AccountsIQ\Repositories\DepartmentRepository())->getDepartmentList();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dev@steadfastcollective.com instead of using the issue tracker.

## Credits

- [Steadfast Collective](https://github.com/steadfastcollective)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
