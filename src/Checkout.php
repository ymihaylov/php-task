<?php

namespace App;

class Checkout {
    private $productTypes = [];
    private $itemsCounts  = [];
    private $itemsPrices  = [];

    public function __construct($itemsStr)
    {
        $this->productTypes = [
            'A' => new ProductPrice(50, new ProductDiscount(3, 20)),
            'B' => new ProductPrice(30, new ProductDiscount(2, 15)),
            'C' => new ProductPrice(20),
            'D' => new ProductPrice(15),
        ];

        foreach ($this->productTypes as $type => $productPrice) {
            $this->itemsCounts[$type]  = substr_count($itemsStr, $type);
            $this->itemsPrices[$type]  = $productPrice->priceFor($this->itemsCounts[$type]);
        }
    }

    public function total()
    {
        return array_sum($this->itemsPrices);
    }
}