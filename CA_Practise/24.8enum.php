<?php
// Define an enum in PHP 8.1+
enum CoffeeSize {
    case SMALL;
    case MEDIUM;
    case LARGE;
}

// Using the enum
$coffeeSize = CoffeeSize::MEDIUM;

if ($coffeeSize === CoffeeSize::SMALL) {
    echo "You ordered a small coffee";
} elseif ($coffeeSize === CoffeeSize::MEDIUM) {
    echo "You ordered a medium coffee";
} elseif ($coffeeSize === CoffeeSize::LARGE) {
    echo "You ordered a large coffee";
}
?>
