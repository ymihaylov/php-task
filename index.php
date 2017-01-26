<?php

require 'vendor/autoload.php';

use App\Checkout;

$checkout = new Checkout('A');
var_dump($checkout->total());