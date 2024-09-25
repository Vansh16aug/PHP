<?php
// Demonstrating Positive Infinity
$positive_infinity = INF; // Dividing by zero results in infinity
echo "Positive Infinity: $positive_infinity"; // Outputs: Positive Infinity: INF

// Demonstrating Negative Infinity
$negative_infinity = -INF; // Negative number divided by zero results in negative infinity
echo "Negative Infinity: $negative_infinity"; // Outputs: Negative Infinity: -INF

$nan = sqrt(-1); // Square root of a negative number is not a real number
echo "Not a Number (NaN): $nan\n"; // Outputs: Not a Number (NaN): NaN

// Another way to get NaN
$nan = acos(2); // acos of a value greater than 1 is undefined, hence NaN
echo "Another NaN example: $nan\n"; // Outputs: Another NaN example: NaN NaN
?>