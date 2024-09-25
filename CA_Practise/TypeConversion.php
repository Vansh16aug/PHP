<?php
$x = 8;
$y = "P"; // or some numeric string

if (is_numeric($y)) {
    $y_numeric = (int)$y; // Convert to integer
} else {
    $y_numeric = 0; // Default to 0 or handle error appropriately
}

echo $x + $y_numeric;
?>