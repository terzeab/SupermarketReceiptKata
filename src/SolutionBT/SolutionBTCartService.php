<?php

namespace App\SolutionBT;

use App\SolutionBT\Models\Cart;
use App\SolutionBT\Models\CartProduct;

class SolutionBTCartService
{
    private FakeRepository $fakeRepository;

    public function __construct()
    {
        $this->fakeRepository = new  FakeRepository();
    }

    public function calculateBasket(array $basket): float
    {
        $cart = new Cart();

        foreach ($basket as $product) {
            $cart->addCartProducts(new CartProduct(
                $this->fakeRepository->getProductBySKU($product['SKU']),
                $product['quantity']
            ));
        }

        foreach ($this->fakeRepository->getDiscounts() as $discount) {
            $value = $discount->getDiscountedAmount($cart);
            if ($value > 0) {
                $cart->addDiscountAmount(
                    $value,
                    $discount->getDescription()
                );
            }

        }

        return $cart->getCartTotal();
    }
}
