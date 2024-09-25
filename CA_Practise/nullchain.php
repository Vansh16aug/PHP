<?php
// Defining multiple variables with some of them set to null
$var1 = null;
$var2 = null;
$var3 = "Hello, World!";
$var4 = "This will not be selected";

// Using the null coalescing operator (??) to find the first non-null value
$firstNonNull = $var1 ?? $var2 ?? $var3 ?? $var4;

// Display the result
echo "The first non-null value is: " . $firstNonNull;
?>
