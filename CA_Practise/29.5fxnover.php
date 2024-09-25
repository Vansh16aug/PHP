<!-- Create a function that behaves differently based on the number of arguments passed, simulating function overloading. -->
<?php

function add() {
    $args = func_get_args(); //Returns an array comprising a function's argument list. The func_get_args()  is an inbuilt function in PHP that is used to get a function argument list in an array form. 
    $sum = 0;
    
    foreach ($args as $num) {
        $sum += $num;
    }
     return $sum;
}
// Add different sets of numbers
echo "Sum of 2 and 3: " . add(2, 3) . "\n";
echo "Sum of 1, 2, 3, 4: " . add(1, 2, 3, 4) . "\n";

?>
