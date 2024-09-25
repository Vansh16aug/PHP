<?php
$a = true;
$b = false;
$c = 10;
$result1 = ($a || $b) && ($c > 5);  // 
$result2 = ($a && $b) || ($c < 5);  // 
// Ternary operator with nested condition
$result3 = $a ? ($b ? "Both true" : "A is true, B is false") : ($c < 5 ? "A is false, C < 5" : "A is false, C >= 5");

// Null coalescing operator with ternary operation
$d = null;
$e = $d ?? ($c > 5 ? "Greater than 5" : "Less or equal to 5");

echo "Result 1: " . ($result1 ? 'true' : 'false') . "\n";
echo "Result 2: " . ($result2 ? 'true' : 'false') . "\n";
echo "Result 3: $result3\n";
echo "Result 4: $e\n";
?>
