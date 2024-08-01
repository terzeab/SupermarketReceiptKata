<?php

namespace App\SolutionBT\Models;

// later improvement - add interface
class Cart
{
    /**
     * @var CartProduct[]
     */
    private array $cartProducts = [];

    private float $discountAmount = 0;
    private array $discountInfo = [];

    public function addCartProducts(CartProduct $cartProduct): self
    {
        $this->cartProducts[] = $cartProduct;

        return $this;
    }

    /**
     * @return CartProduct[]
     */
    public function getCartProducts(): array
    {
        return $this->cartProducts;
    }

    public function addDiscountAmount(float $value, string $description): void
    {
        $this->discountAmount += $value;
        $this->discountInfo[] = "$description: -$value euro";
    }

    public function getDiscountInfo(): array
    {
        return $this->discountInfo;
    }

    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }

    public function getProductsTotal(): float
    {
        $value = 0;

        foreach ($this->cartProducts as $cartProduct) {
            $value += $cartProduct->getQuantity() * $cartProduct->getProduct()->getPrice();
        }

        return $value;
    }

    public function getCartTotal(): float
    {
        return $this->getProductsTotal() - $this->getDiscountAmount();
    }
}