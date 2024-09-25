<?php
// Accept two numbers from the user
$num1 = 9;
$num2 = 4;

// Perform a series of operations with different precedence levels
$result1 = $num1 + $num2 * 2; // Multiplication first
$result2 = ($num1 + $num2) * 2; // Addition first due to parentheses
$result3 = $num1 ** $num2; // Exponentiation
$result4 = $num1 % $num2; // Modulo operation

echo "Result 1: $result1\n"; // Outputs 17
echo "Result 2: $result2\n"; // Outputs 26
echo "Result 3: $result3\n"; // Outputs 6561
echo "Result 4: $result4\n"; // Outputs 1
?>
