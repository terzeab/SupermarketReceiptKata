<?php

namespace App\SolutionBT\Models;

// later improvement - add interface
class Product
{
    private string $name;
    private string $sku;
    private float $price;

    public function __construct(string $name, string $sku, float $price)
    {
        $this->name = $name;
        $this->sku = $sku;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}