# 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jetwes/telpos-appraisal-interview.svg?style=flat-square)](https://packagist.org/packages/jetwes/telpos-appraisal-interview)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/jetwes/telpos-appraisal-interview/run-tests?label=tests)](https://github.com/jetwes/telpos-appraisal-interview/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jetwes/telpos-appraisal-interview.svg?style=flat-square)](https://packagist.org/packages/jetwes/telpos-appraisal-interview)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jetwes/telpos-appraisal-interview
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Jetwes\TelposAppraisalInterview\TelposAppraisalInterviewServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Jetwes\TelposAppraisalInterview\TelposAppraisalInterviewServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$telpos-appraisal-interview = new Jetwes\TelposAppraisalInterview();
echo $telpos-appraisal-interview->echoPhrase('Hello, Jetwes!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jens Twesmann](https://github.com/jetwes)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
