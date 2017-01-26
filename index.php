<?php

require 'vendor/autoload.php';

use App\Checkout;

$checkout = new Checkout('AAABC');
var_dump($checkout->total());