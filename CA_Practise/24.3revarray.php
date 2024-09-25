<?php
$x=["Zen", "Maruti","Fiat"];

for ($i=sizeof($x)-1; $i>=0; $i--){   //without using fxn
// The count() function is a built-in PHP function used to count the number of elements in an array. It returns the total count of elements within the array.
//The sizeof() function is an alias of the count() function in PHP. It behaves identically count() and can be used interchangeably.
echo $x[$i];
echo "<br>";
 }
echo "<br>";
 
echo "<br>";
 echo "Reverse using array_reverse";
$rev= array_reverse($x);
 print_r($rev);
 echo "<br>";
 echo "<br>";
$preservekey=array_reverse($x); //true will preserve the key
print_r($preservekey);
?>