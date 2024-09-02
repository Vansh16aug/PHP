<?php

// Define a constant
define('PI', 3.14);

// Define a null variable
$nullVariable = null;

// Define a constant array
define('FRUITS', array('apple', 'banana', 'orange'));

// Usage examples
echo PI; // Output: 3.14

if ($nullVariable === null) {
    echo "The variable is null.";
} else {
    echo "The variable is not null.";
}

print_r(FRUITS); // Output: Array ( [0] => apple [1] => banana [2] => orange )

?>