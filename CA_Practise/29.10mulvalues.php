<!-- Create a function that returns multiple values using an array. -->
<?php

function calculate($a, $b) {
    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = ($b != 0) ? $a / $b : "undefined";

    return [$sum, $difference, $product, $quotient];
}

// Get the results as an array
list($sum, $diff, $prod, $quot) = calculate(10, 5);
//The list() function is used to assign values to a list of variables in one operation.
echo "Sum: $sum\n";
echo "Difference: $diff\n";
echo "Product: $prod\n";
echo "Quotient: $quot\n";

?>
