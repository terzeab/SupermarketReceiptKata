<?php

namespace App\SolutionBT\Models;

interface DiscountInterface
{
    /**
     * Calculate the discount amount based on the cart contents.
     *
     * @param Cart $cart The shopping cart.
     * @return float The amount of discount.
     */
    public function getDiscountedAmount(Cart $cart): float;

    public function getDescription(): string;
}
