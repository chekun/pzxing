Pzxing
========================

a PHP extension to decode barcode image.

This project depends on:

- PHP-CPP  
    * [Github](https://github.com/CopernicaMarketingSoftware/PHP-CPP)
    * [Official Site](http://www.php-cpp.com/)
- ZXing C++ Port
    * [Github](https://github.com/glassechidna/zxing-cpp)

## How to Install

- Clone the repo

```
git clone https://github.com/chekun/pzxing
```

- Pull the Dependencies

```
git submodule init
```

- Install PHP-CPP

    Follow the instructions [here](http://www.php-cpp.com/documentation/install) to install. [Tag V1.3] is tested.

- Install ZXing C++

    Follow the instructions [here](https://github.com/glassechidna/zxing-cpp/blob/master/README.md) to install

> In order to build php extension for the next step, you must add ```-fPIC``` flag for libzxing before you compile ZXing C++.

- Install Pzxing

```
cd src
make
make install
```

> the default Makefile is targeted for CentOS, which php is installed via yum, you need to edit for you OS before you execute make command.

## How to Use

use is simple.

```php
<?php

/**
 * This is a very simple sample code
 * to show you how to use Pzxing
 */

if (! extension_loaded('pzxing')) {
    echo 'Pzxing is not installed or loaded!';
    exit(-1);
}

function decode($filename)
{
   echo 'Decoding '.$filename.PHP_EOL;
   try {
       echo pzxing_decode($filename).PHP_EOL;
   } catch (Exception $e) {
       echo $e->getMessage().PHP_EOL;
   }
}

decode('qrcode.png');
```

Simply run the following command:

```
php sample.php
```

Once pzxing is installed correctly, you should be able to see text below in your terminal console.

```
Welcome to use Pzxing, a simple a PHP extension to decode barcode image.
```

And that's it!


### The MIT License (MIT)

Copyright (c) 2014 chekun

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
