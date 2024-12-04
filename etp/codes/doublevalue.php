<?php
function doubleValues($arr) {
    for ($i = 0; $i < sizeof($arr); $i++) {
        $arr[$i] = $arr[$i] * 2;
    }
    print_r($arr);
}

$arr = [1, 2, 3, 4];

print_r($arr);
echo "<br>";

doubleValues($arr);
echo "<br>";

print_r($arr);
?>


<!-- 
Call by Value: 
Modifications made inside the function do not
affect the original variable outside the function.
               
               
Call by Reference: ( & )
The function receives a reference (or address) to the original variable.
Modifications made inside the function directly affect the original variable. -->