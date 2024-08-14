<?php

// Integer functions

// Absolute value
$number = -10;
$absValue = abs($number);
echo "Absolute value: " . $absValue . "\n";

// Ceiling
$number = 4.3;
$ceilingValue = ceil($number);
echo "Ceiling value: " . $ceilingValue . "\n";

// Floor
$number = 4.7;
$floorValue = floor($number);
echo "Floor value: " . $floorValue . "\n";

// Round
$number = 4.5;
$roundValue = round($number);
echo "Rounded value: " . $roundValue . "\n";

// Maximum
$numbers = [10, 5, 8, 12, 3];
$maxValue = max($numbers);
echo "Maximum value: " . $maxValue . "\n";

// Minimum
$numbers = [10, 5, 8, 12, 3];
$minValue = min($numbers);
echo "Minimum value: " . $minValue . "\n";

// Random
$randomNumber = rand(1, 100);
echo "Random number between 1 and 100: " . $randomNumber . "\n";

?>