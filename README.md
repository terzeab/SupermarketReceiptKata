# Supermarket Pricing - Requirements

## Overview

The objective of this project is to develop a system that calculates the total price of items in a supermarket shopping basket, while applying various promotions and discounts to reflect real-world pricing strategies.

## Pricing

Below are the prices for each SKU used in the project:

- **SKU-Banana**: $1.20 per kg
- **SKU-Grapes**: $3.50 per kg
- **SKU-Apple**: $2.00 per kg
- **SKU-Pear**: $1.80 per kg
- **SKU-Milk**: $1.50 per carton
- **SKU-Bread**: $2.00 per loaf

## Requirements


### Part 1: Basic Basket Calculation

**Calculate the total price of the items in the given basket:**

You will be provided with a basket array in `index.php`, which contains a list of items with their SKUs and quantities. The initial task is to compute the total price of all items without applying any discounts or promotions.

**Example Basket:**

```php
$basket = [
    ['SKU' => 'SKU-Pear', 'quantity' => 2],
    ['SKU' => 'SKU-Banana', 'quantity' => 4],
    ['SKU' => 'SKU-Grapes', 'quantity' => 3],
    ['SKU' => 'SKU-Apple', 'quantity' => 7],
    ['SKU' => 'SKU-Milk', 'quantity' => 1],
    ['SKU' => 'SKU-Bread', 'quantity' => 2]
];
```


### Part 2: Implement Discounts

**Apply the following discount to eligible items in the basket:**

- **SKU-Pear**: Apply a 5% discount on all purchased pears.

The system should automatically identify when this item is in the basket and apply the discount to the total cost of the items accordingly, regardless of the quantity purchased.


### Part 3: Implement Bulk Discounts

**Apply the following bulk discounts to eligible items in the basket:**

- **SKU-Banana**: Buy 4 or more and receive a 10% discount on those items.
- **SKU-Grapes**: Buy 2 or more and receive a 5% discount on those items.

The system should automatically detect when the quantity threshold for each discount is met and apply the discount accordingly.



### Part 4: Implement Buy-One-Get-One-Free (BOGOF) Promotions

**Apply the following Buy-One-Get-One-Free promotions to eligible items in the basket:**

- **SKU-Apple**: Buy 4, pay for 3.
- **SKU-Bread**: Buy 3, pay for 2.

The system should correctly identify when a BOGOF promotion applies and adjust the total price to reflect the free items.



### Part 5: Implement Combo Discount for Milk and Bread

**Apply the following combo discount:**

- **Buy 1 Milk and 1 Bread**: Get a 5% discount on the combined price of both items.

The system should detect when both `SKU-Milk` and `SKU-Bread` are present in the basket with a quantity of at least 1 each, and then apply a 5% discount on the total value of these two items.



### Part 6: Calculate Final Basket Price with All Promotions

**Calculate the total price of the basket after applying all applicable promotions:**

- Combine all the rules from **Part 2**, **Part 3**, and **Part 4**.
- Ensure that all eligible discounts and promotions are applied in the correct order.
- The final total should reflect the accumulated savings from the bulk discounts, BOGOF promotions, and the combo discount for Milk and Bread.

The system should provide the final price of the basket after considering and applying all the promotions mentioned above.