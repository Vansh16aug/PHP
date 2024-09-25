<?php

// Example 1: Arithmetic and assignment
$x = 10 + 5 * 3;  // Multiplication (*) has higher precedence than addition (+)
echo "Example 1: x = 10 + 5 * 3 -> x = $x\n"; // Output: 25

// Example 2: Parentheses
$y = (10 + 5) * 3; // Parentheses change the order of evaluation
echo "Example 2: y = (10 + 5) * 3 -> y = $y\n"; // Output: 45

// Example 3: Logical AND and OR
$a = true || false && false; // AND (&&) has higher precedence than OR (||)
echo "Example 3: a = true || false && false -> a = ";
echo $a ? 'true' : 'false'; // Output: true
echo "\n";

// Example 4: Bitwise and logical operators
$b = 4 | 2 & 1; // Bitwise AND (&) has higher precedence than OR (|)
echo "Example 4: b = 4 | 2 & 1 -> b = $b\n"; //

// Example 5: Equality and assignment
$c = 5 == 3 + 2; // Addition (+) has higher precedence than equality (==)
echo "Example 5: c = 5 == 3 + 2 -> c = ";
echo $c ? 'true' : 'false'; // Output: true
echo "\n";

// Example 6: Associativity of assignment
$d = $e = 10; // Assignment is right-associative
echo "Example 6: d = e = 10 -> d = $d, e = $e\n"; // Output: 10, 10

?>
