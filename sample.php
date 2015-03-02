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
