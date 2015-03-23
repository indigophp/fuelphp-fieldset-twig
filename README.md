# Fuel Fieldset Twig

[![Latest Version](https://img.shields.io/github/release/indigophp/fuelphp-fieldset-twig.svg?style=flat-square)](https://github.com/indigophp/fuelphp-fieldset-twig/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/indigophp/fuelphp-fieldset-twig.svg?style=flat-square)](https://travis-ci.org/indigophp/fuelphp-fieldset-twig)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/indigophp/fuelphp-fieldset-twig.svg?style=flat-square)](https://scrutinizer-ci.com/g/indigophp/fuelphp-fieldset-twig)
[![Quality Score](https://img.shields.io/scrutinizer/g/indigophp/fuelphp-fieldset-twig.svg?style=flat-square)](https://scrutinizer-ci.com/g/indigophp/fuelphp-fieldset-twig)
[![HHVM Status](https://img.shields.io/hhvm/indigophp/fuelphp-fieldset-twig.svg?style=flat-square)](http://hhvm.h4cc.de/package/indigophp/fuelphp-fieldset-twig)
[![Total Downloads](https://img.shields.io/packagist/dt/indigophp/fuelphp-fieldset-twig.svg?style=flat-square)](https://packagist.org/packages/indigophp/fuelphp-fieldset-twig)

**FuelPHP Fieldset Twig integration.**


## Install

Via Composer

``` bash
$ composer require indigophp/fuelphp-fieldset-twig
```


## Usage

This package provides an easy way to use [fuelphp/fieldset](https://github.com/fuelphp/fieldset) with [Twig](http://twig.sensiolabs.org).

``` php
use Indigo\Fuel\Fieldset\RenderProvider\CoreRenders;
use Indigo\Fuel\Fieldset\Twig\FieldsetExtension;

$extension = new FieldsetExtension(new CoreRenders);

$twigEnvironment->addExtension($extension);
```

Twig syntax:

```
{{ render_form(form) }}
```


## Testing

``` bash
$ phpunit
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/indigophp/fuelphp-fieldset-twig/contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
