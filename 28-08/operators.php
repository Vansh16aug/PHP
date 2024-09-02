<?php

$a = 5;
$b = 10;

// Less than operator
$result = $a <=> $b;
echo "Less than operator: $result\n";

// Equal operator
$result = $a <=> $a;
echo "Equal operator: $result\n";

// Greater than operator
$result = $b <=> $a;
echo "Greater than operator: $result\n";

?>