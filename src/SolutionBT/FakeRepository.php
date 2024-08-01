<?php

namespace App\SolutionBT;

use App\SolutionBT\Models\BuyXPayYDiscount;
use App\SolutionBT\Models\DiscountInterface;
use App\SolutionBT\Models\Product;

class FakeRepository
{
    /**
     * @var Product[]
     */
    private array $products = [];

    /**
     * @var DiscountInterface[]
     */
    private array $discounts = [];

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        if (empty($this->products)) {
            $this->products = [
                new Product('Apple', 'SKU-Apple', 1.00),
                new Product('Banana', 'SKU-Banana', 0.50),
                new Product('Grapes', 'SKU-Grapes', 2.00),
                new Product('Milk', 'SKU-Milk', 2.50),
                new Product('Bread', 'SKU-Bread', 1.50)
            ];
        }

        return $this->products;
    }

    public function getProductBySKU(string $sku): Product
    {
        foreach ($this->getProducts() as $product) {
            if ($product->getSku() === $sku) {
                return $product;
            }
        }

        throw new \DomainException("Product with SKU: $sku not found!");
    }

    public function getDiscounts(): array
    {
        if (empty($this->discounts)) {
            $this->discounts = [
                new BuyXPayYDiscount($this->getProductBySKU('SKU-Apple'), 3, 2),
                new BuyXPayYDiscount($this->getProductBySKU('SKU-Banana'), 4, 3),
            ];
        }

        return $this->discounts;
    }
}