<?php

use TddPhp\Arithmetic\Subtraction;

require_once 'vendor/autoload.php';

$subtraction = new Subtraction();

$subtraction->setFirstNumber(0.0);
$subtraction->setSecondNumber(4.0);

try {
    echo $subtraction->subtract();
} catch(InvalidArgumentException $e) {
    echo $e->getMessage();
}
