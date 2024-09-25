<?php
function findMaxMin($array) {
    // Check if the array is not empty
    if (!empty($array)) {
        // Find the maximum value in the array
        $maxValue = max($array);
        
        // Find the minimum value in the array
        $minValue = min($array);
        
        // Output the results
        echo "Maximum value in the array: $maxValue\n";
        echo "Minimum value in the array: $minValue\n";
    } else {
        echo "The array is empty.\n";
    }
}

// Example usage
$numbers = [3, 5, 1, 8, 9, 2, 10];
findMaxMin($numbers);
$num = [3, 5, 9, 7, 9, 1, 10];
findMaxMin($numbers);
?>
