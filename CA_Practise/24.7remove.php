<?php
// Indexed array
$numbers = [10, 20, 30, 40, 50];

// Display original array
echo "<h3>Original Array:</h3>";
print_r($numbers);
echo "<br><br>";

// Remove the first element
$firstElement = array_shift($numbers);

echo "<h3>First Element Removed:</h3>";
echo "Removed Element: $firstElement<br>";
echo "Array after removing the first element:<br>";
print_r($numbers);
echo "<br><br>";

// Remove the last element
$lastElement = array_pop($numbers);

echo "<h3>Last Element Removed:</h3>";
echo "Removed Element: $lastElement<br>";
echo "Array after removing the last element:<br>";
print_r($numbers);
?>

