<?php

function multiply(...$numbers) {
    //In PHP, variadic functions are defined by employing the three dots operator before the function parameter. This enables the function to accept an unlimited number of arguments when invoked elsewhere in the code.
    $result = 1;
    
    foreach ($numbers as $num) {
        $result *= $num;
    }
    
    return $result;
}

// Call the function with different numbers of arguments
echo "Multiplication of 2, 3: " . multiply(2, 3) . "\n";
echo "Multiplication of 1, 4, 5: " . multiply(1, 4, 5) . "\n";

?>
