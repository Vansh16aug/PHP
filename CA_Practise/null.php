<?php
// Declare a variable and assign it a value
$name = "Alice";

// Output the value of the variable
echo "Name: $name\n"; // Outputs: Name: Alice

// Set the variable to null
$name = null;

// Check if the variable is null
if (is_null($name)) {
    echo "The variable 'name' is null now.\n"; // Outputs: The variable 'name' is null now.
}

// Trying to echo a null variable will produce no output
echo "Name: $name\n"; //   Outputs: Name: 
?>
