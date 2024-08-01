<?php

namespace App\Service;

require_once __DIR__ . '/../vendor/autoload.php';

$basket = [
    ['SKU' => 'SKU-Apple', 'quantity' => 3],
    ['SKU' => 'SKU-Banana', 'quantity' => 4],
    ['SKU' => 'SKU-Grapes', 'quantity' => 2],
    ['SKU' => 'SKU-Milk', 'quantity' => 2],
    ['SKU' => 'SKU-Bread', 'quantity' => 2]
];

$price = (new \App\Service\CartService())->calculateBasket($basket);
$price = (new \App\SolutionBT\SolutionBTCartService())->calculateBasket($basket);


echo "price: $price";