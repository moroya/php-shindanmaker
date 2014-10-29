# php-shindanmaker

Simple library for using Shindanmaker.

## Installation

The recommended way to install this package is through [Composer](http://getcomposer.org/):

```
composer require moroya/php-shindanmaker:dev-master
```

## Usage

```php
<?php

use Moroya\Shindanmaker\Shindan;

$shindan = new Shindan(492093, 'moroya');
echo $shindan->getMessage(); // moroya is lalala...
```
