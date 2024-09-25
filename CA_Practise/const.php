<?php

// Defining constants using the define() function
define("PI", 3.14159265359);
define("GRAVITY", 9.81);

// Using constants
$radius = 5;
$circumference = 2 * PI * $radius;

echo "Example 1: Circumference of a circle with radius $radius is.number_format($circumference,2)"; // Output: 31.4159265359
echo "Gravity on Earth is " . GRAVITY . " m/s²\n"; // Output: 9.81

?>
