<?php

namespace App;

class ProductPrice {
    private $singlePrice;
    private $discount;

    public function __construct($singlePrice, $discount = null)
    {
        $this->singlePrice = $singlePrice;
        $this->discount = $discount;
    }

    public function priceFor($count)
    {
        return $count * $this->singlePrice - $this->discountFor($count);
    }

    public function discountFor($count)
    {
        if ($this->discount) {
            return $this->discount->discountFor($count);
        }
    }
}
