<?php

namespace Tests;

use App\SolutionBT\SolutionBTCartService;
use PHPUnit\Framework\TestCase;

class CartServiceTest extends TestCase
{
    private SolutionBTCartService $cartService;

    protected function setUp(): void
    {
        $this->cartService = new SolutionBTCartService();
    }

    public function testCalculateDiscount()
    {
        $this->assertEquals(1, $this->cartService->calculateBasket([['SKU' => 'SKU-Apple', 'quantity' => 1]]));
        $this->assertEquals(2, $this->cartService->calculateBasket([['SKU' => 'SKU-Apple', 'quantity' => 2]]));
        $this->assertEquals(2, $this->cartService->calculateBasket([['SKU' => 'SKU-Apple', 'quantity' => 3]]));
        $this->assertEquals(3, $this->cartService->calculateBasket([['SKU' => 'SKU-Apple', 'quantity' => 4]]));
        $this->assertEquals(8, $this->cartService->calculateBasket([['SKU' => 'SKU-Apple', 'quantity' => 11]]));

        $this->assertEquals(0.5, $this->cartService->calculateBasket([['SKU' => 'SKU-Banana', 'quantity' => 1]]));
        $this->assertEquals(1, $this->cartService->calculateBasket([['SKU' => 'SKU-Banana', 'quantity' => 2]]));
        $this->assertEquals(1.5, $this->cartService->calculateBasket([['SKU' => 'SKU-Banana', 'quantity' => 3]]));
        $this->assertEquals(1.5, $this->cartService->calculateBasket([['SKU' => 'SKU-Banana', 'quantity' => 4]]));
        $this->assertEquals(5, $this->cartService->calculateBasket([['SKU' => 'SKU-Banana', 'quantity' => 13]]));

        $this->assertEquals(17, $this->cartService->calculateBasket([
            ['SKU' => 'SKU-Apple', 'quantity' => 11],
            ['SKU' => 'SKU-Banana', 'quantity' => 13],
            ['SKU' => 'SKU-Grapes', 'quantity' => 2]
        ]));
    }
}
