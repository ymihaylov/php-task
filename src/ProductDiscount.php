<?php

namespace App;

class ProductDiscount {
    private $productsCount;
    private $discount;

    public function __construct($productsCount, $discount)
    {
        $this->productsCount = $productsCount;
        $this->discount      = $discount;
    }

    public function getProductsCount()
    {
        return $this->productsCount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}