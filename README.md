# Vesta PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/steadfastcollective/vesta-php.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/vesta-php)
[![Build Status](https://img.shields.io/travis/steadfastcollective/vesta-php/master.svg?style=flat-square)](https://travis-ci.org/steadfastcollective/vesta-php)
[![Quality Score](https://img.shields.io/scrutinizer/g/steadfastcollective/vesta-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/steadfastcollective/vesta-php)
[![Total Downloads](https://img.shields.io/packagist/dt/steadfastcollective/vesta-php.svg?style=flat-square)](https://packagist.org/packages/steadfastcollective/vesta-php)

Vesta-php is a php package to help make calls to a Vesta Control Panel API.

## Installation

You can install the package via composer:

```bash
composer require steadfastcollective/vesta-php
```

## Usage

``` php
use SteadfastCollective\Vesta\Vesta;

$response = (new Vesta($ip, $username, $password, $port))
    ->request([
        'cmd' => 'v-add-user',
        'arg1' => 'example-username',
        'arg2' => 'example-password',
        'arg3' => 'example@example.com',
    ]);
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
