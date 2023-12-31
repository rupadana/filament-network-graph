# Filament Network Graph using v-network-graph

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rupadana/filament-network-graph.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-network-graph)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rupadana/filament-network-graph/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rupadana/filament-network-graph/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rupadana/filament-network-graph/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rupadana/filament-network-graph/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rupadana/filament-network-graph.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-network-graph)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rupadana/filament-network-graph
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-network-graph-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-network-graph-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-network-graph-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentNetworkGraph = new Rupadana\FilamentNetworkGraph();
echo $filamentNetworkGraph->echoPhrase('Hello, Rupadana!');
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

- [Rupadana](https://github.com/rupadana)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
