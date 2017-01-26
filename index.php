<?php

require 'vendor/autoload.php';

use App\Checkout;
use App\ProductPrice;
use App\ProductDiscount;

$pricingRules = [
    'A' => new ProductPrice(50, [new ProductDiscount(3, 20), new ProductDiscount(10, 100)]),
    'B' => new ProductPrice(30, new ProductDiscount(2, 15)),
    'C' => new ProductPrice(20),
    'D' => new ProductPrice(15),
];

$checkout = new Checkout('BB', $pricingRules);
var_dump($checkout->total());