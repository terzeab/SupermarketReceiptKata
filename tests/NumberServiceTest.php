<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Service\NumberService;

class NumberServiceTest extends TestCase
{
    private NumberService $numberService;

    protected function setUp(): void
    {
        $this->numberService = new NumberService();
    }

    public function testAdd()
    {
        $this->assertEquals(5, $this->numberService->add(2, 3));
        $this->assertEquals(-1, $this->numberService->add(2, -3));
    }

    public function testSubtract()
    {
        $this->assertEquals(-1, $this->numberService->subtract(2, 3));
        $this->assertEquals(5, $this->numberService->subtract(2, -3));
    }

    public function testMultiply()
    {
        $this->assertEquals(6, $this->numberService->multiply(2, 3));
        $this->assertEquals(-6, $this->numberService->multiply(2, -3));
    }

    public function testDivide()
    {
        $this->assertEquals(2, $this->numberService->divide(6, 3));
        $this->assertEquals(-2, $this->numberService->divide(-6, 3));
        $this->expectException(\InvalidArgumentException::class);
        $this->numberService->divide(1, 0);
    }
}
