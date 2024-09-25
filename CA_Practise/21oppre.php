<?php
$x = 4;
$y = 2;
$z = 3;

// Complex expression to test precedence and associativity
$result = $x + $y * $z ** $y / $x - $y % $z; 

// Equivalent step-by-step breakdown:
// $result = $x + ($y * ($z ** $y) / $x) - ($y % $z);

echo "Result: $result\n"; 
?>
<!-- Exponentiation (**) has the highest precedence and is right-associative.
Multiplication (*), Division (/), and Modulus (%) have the next highest precedence and are left-associative.
Addition (+) and Subtraction (-) have the lowest precedence and are also left-associative. -->