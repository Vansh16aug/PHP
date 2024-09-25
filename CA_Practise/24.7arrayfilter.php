<?php
// Indexed array
$numbers = [10, 21, 32, 43, 54, 65];

// Filter the array to get even numbers
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

echo "<h3>Even Numbers:</h3>";
print_r($evenNumbers); //will filter and print only even number from the array
?>
