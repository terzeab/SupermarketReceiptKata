<?php

require_once __DIR__ . '/../vendor/autoload.php';

$basket = [
    ['SKU' => 'SKU-Pear', 'quantity' => 2],
    ['SKU' => 'SKU-Banana', 'quantity' => 4],
    ['SKU' => 'SKU-Grapes', 'quantity' => 3],
    ['SKU' => 'SKU-Apple', 'quantity' => 7],
    ['SKU' => 'SKU-Milk', 'quantity' => 1],
    ['SKU' => 'SKU-Bread', 'quantity' => 2]
];

echo "\nPart 1: " . (new \App\Service\CartService())->calculateBasketPart1($basket);
echo "\nPart 2: " . (new \App\Service\CartService())->calculateBasketPart2($basket);
echo "\nPart 3: " . (new \App\Service\CartService())->calculateBasketPart3($basket);
echo "\nPart 4: " . (new \App\Service\CartService())->calculateBasketPart4($basket);
echo "\nPart 5: " . (new \App\Service\CartService())->calculateBasketPart5($basket);
