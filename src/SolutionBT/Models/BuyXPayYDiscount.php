<?php

namespace App\SolutionBT\Models;

class BuyXPayYDiscount implements DiscountInterface
{
    public function __construct(private readonly Product $product, private readonly int $buyCount, private readonly int $payCount)
    {
        if ($this->payCount >= $this->buyCount) {
            throw new \DomainException("Pay count should be lower than buy count");
        }
    }

    public function getDiscountedAmount(Cart $cart): float
    {
        $totalDiscount = 0;
        foreach ($cart->getCartProducts() as $cartProduct) {
            if ($cartProduct->getProduct()->getSku() === $this->product->getSku()) {
                $discountedSets = intdiv($cartProduct->getQuantity(), $this->buyCount); // Number of sets of buyCount items
                $totalDiscount = $discountedSets * ($this->buyCount - $this->payCount) * $this->product->getPrice();
            }
        }

        return $totalDiscount;
    }

    public function getDescription(): string
    {
        return "Buy {$this->buyCount} {$this->product->getName()}, pay {$this->payCount}";
    }
}
