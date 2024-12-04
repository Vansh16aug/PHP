<?php
// Declare an array of integers
$numbers = [15, 3, 9, 25, 1, 8, 42, 7];

// Find the minimum and maximum values
$minValue = min($numbers);
$maxValue = max($numbers);

// Sort the array in ascending order
sort($numbers);

// Display the results
echo "Original Array: [15, 3, 9, 25, 1, 8, 42, 7]<br>";
echo "Minimum Value: $minValue<br>";
echo "Maximum Value: $maxValue<br>";
echo "Sorted Array (Ascending): " . implode(", ", $numbers);
?>


