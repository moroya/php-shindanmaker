# php-shindanmaker

診断メーカーをPHPから使うライブラリ

# usage

```php
<?php

use Moroya\Shindanmaker\Shindan;

$shindan = new Shindan(492093, 'moroya');
echo $shindan->getMessage(); // moroya is lalala...
```
