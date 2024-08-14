<?php

// Example of float functions

// 1. abs() - Returns the absolute value of a number
$number = -10.5;
$absoluteValue = abs($number);
echo "Absolute value of $number is: $absoluteValue <br>";

// 2. round() - Rounds a float to the nearest integer
$floatNumber = 3.7;
$roundedNumber = round($floatNumber);
echo "Rounded value of $floatNumber is: $roundedNumber <br>";

// 3. floor() - Rounds a float down to the nearest integer
$floatNumber = 5.9;
$roundedDownNumber = floor($floatNumber);
echo "Rounded down value of $floatNumber is: $roundedDownNumber <br>";

// 4. ceil() - Rounds a float up to the nearest integer
$floatNumber = 2.3;
$roundedUpNumber = ceil($floatNumber);
echo "Rounded up value of $floatNumber is: $roundedUpNumber <br>";

// 5. sqrt() - Returns the square root of a number
$number = 16;
$squareRoot = sqrt($number);
echo "Square root of $number is: $squareRoot <br>";

// 6. pow() - Returns the value of a number raised to the power of another number
$base = 2;
$exponent = 3;
$result = pow($base, $exponent);
echo "$base raised to the power of $exponent is: $result <br>";

?>