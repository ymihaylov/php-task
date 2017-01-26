<?php

require 'vendor/autoload.php';

use \LessQL\Database;

use App\Checkout;
use App\ProductPrice;
use App\ProductDiscount;

// -------- Pricing Rules Static

$pricingRules = [
    'A' => new ProductPrice(50, [new ProductDiscount(3, 20), new ProductDiscount(10, 100)]),
    'B' => new ProductPrice(30, new ProductDiscount(2, 15)),
    'C' => new ProductPrice(20),
    'D' => new ProductPrice(15),
];

$checkout = new Checkout('AAABB', $pricingRules);
var_dump($checkout->total());


// -------- Pricing Rules With MySQL Database

// $dbConfig = [
//     'host'     => '192.168.10.10',
//     'dbname'   => 'php-task',
//     'username' => 'homestead',
//     'password' => 'secret',
// ];

// $pdo = new PDO('mysql:host='.$dbConfig['host'].';dbname='.$dbConfig['dbname'],
//     $dbConfig['username'],
//     $dbConfig['password']
// );

// $db = new Database($pdo);

// foreach ($db->products()->fetchAll() as $product) {
//     $productDiscounts = $db->discounts()
//         ->where('product_id', $product['id'])
//         ->fetchAll();

//     $discounts = [];
//     foreach ($productDiscounts as $discount) {
//         $discounts[] = new ProductDiscount($discount['count'], $discount['discount']);
//     }

//     $pricingRules[$product['name']] = new ProductPrice($product['price'], $discounts);
// }
