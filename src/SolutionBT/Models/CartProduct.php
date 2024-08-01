<?php

namespace App\SolutionBT\Models;

// later improvement - add interface
class CartProduct
{
    public function __construct(private readonly Product $product, private readonly float $quantity)
    {

    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }
}