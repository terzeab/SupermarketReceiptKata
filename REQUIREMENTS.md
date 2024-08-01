# Supermarket Pricing - Requirements

## Overview

This project aims to calculate the total price of items in a supermarket shopping basket, applying various promotions and discounts.

## Requirements

1. **Basic Pricing:**
    - The supermarket sells items with individual prices.
    - Each item has a unique identifier (SKU or code).
    - The basic price of each item is provided.

2. **Promotions:**
    - The supermarket offers various promotions or discounts:
        - **Bulk Discounts:** A discount applies when a certain quantity of an item is purchased.
        - **Mix-and-Match Discounts:** Discounts apply when specific combinations of items are purchased.
        - **Buy-One-Get-One-Free (BOGOF):** For every item purchased, another item is free.

3. **Shopping Basket:**
    - The shopping basket contains a list of items, each with a quantity.
    - Items are identified by their SKU or code.

4. **Pricing Calculation:**
    - Implement a function to calculate the total price of the items in the shopping basket.
    - The function should apply all applicable promotions or discounts to the total price.

5. **Input Format:**
    - The input is a list of items with their SKUs and quantities. For example:
      ```php
      $basket = [
          ['SKU' => 'SKU-Apple', 'quantity' => 3],
          ['SKU' => 'SKU-Banana', 'quantity' => 2]
      ];
      ```

6. **Output Format:**
    - The output is the total price after applying all promotions or discounts.

7. **Example Prices and Promotions:**
    - Prices:
        - SKU 'SKU-Apple' costs $1.00 each.
        - SKU 'SKU-Banana' costs $0.50 each.
        - SKU 'SKU-Grapes' costs $2.00 each.
        - SKU 'SKU-Milk' costs $2.50 each.
        - SKU 'SKU-Bread' costs $1.50 each.

    - Promotions:
        - For SKU 'SKU-Apple': Buy 3 pay 2.
        - For SKU 'SKU-Banana': Buy 4 pay 3.
        - For SKU 'SKU-Grapes': Buy 2 for $3.50 (normally $4.00).
        - For SKU 'SKU-Milk': Buy 1 for $2.50 each, buy 2 or more for $2.00 each.
        - For SKU 'SKU-Bread': Buy 1 for $1.50, buy 2 or more for $1.25 each.

8. **Example Basket and Output:**
    - Example Basket:
      ```php
      $basket = [
          ['SKU' => 'SKU-Apple', 'quantity' => 3],
          ['SKU' => 'SKU-Banana', 'quantity' => 4],
          ['SKU' => 'SKU-Grapes', 'quantity' => 2],
          ['SKU' => 'SKU-Milk', 'quantity' => 2],
          ['SKU' => 'SKU-Bread', 'quantity' => 2]
      ];
      ```

    - Expected Output:
        - SKU 'SKU-Apple': 3 apples at $2.50 (promotion applied).
        - SKU 'SKU-Banana': 4 bananas at $1.80 (promotion applied).
        - SKU 'SKU-Grapes': 2 bunches of grapes at $3.50 (promotion applied).
        - SKU 'SKU-Milk': 2 cartons of milk at $2.00 each.
        - SKU 'SKU-Bread': 2 loaves of bread at $1.25 each.

      Total Price: $2.50 (Apple) + $1.80 (Banana) + $3.50 (Grapes) + $4.00 (Milk) + $2.50 (Bread) = **$14.30**
