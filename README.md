# Extend Database will give more power to already best.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rakshitbharat/extendeddatabase.svg?style=flat-square)](https://packagist.org/packages/rakshitbharat/extendeddatabase)
[![Build Status](https://img.shields.io/travis/rakshitbharat/extendeddatabase/master.svg?style=flat-square)](https://travis-ci.org/rakshitbharat/extendeddatabase)
[![Quality Score](https://img.shields.io/scrutinizer/g/rakshitbharat/extendeddatabase.svg?style=flat-square)](https://scrutinizer-ci.com/g/rakshitbharat/extendeddatabase)
[![Total Downloads](https://img.shields.io/packagist/dt/rakshitbharat/extendeddatabase.svg?style=flat-square)](https://packagist.org/packages/rakshitbharat/extendeddatabase)

Extend Power of Laravel's ORM Eloquent with attaching more methods to it.

## Installation

You can install the package via composer:

```bash
composer require rakshitbharat/extendeddatabase
```

## Usage

``` php
echo User::select('*')->where('name','Rakshit')->toCompleteSql();
```
Output 
select * from `users` where `name` = Rakshit


``` php
echo User::select('*')->where('name','Rakshit')->paginateToDatatable();
```
Excepted output will be more advance pagination options.
For more information to pass parameters to this object with Request object read below.
https://datatables.net/manual/server-side


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email rakshitbharatproject@gmail.com instead of using the issue tracker.
