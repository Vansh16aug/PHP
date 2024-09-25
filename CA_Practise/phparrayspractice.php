<?php
$array1 = [1, 3, 5, 7, 9]; 
$array2 = [3, 7, 11, 15];
$merge=array_merge ($array1,$array2); //combine two arrays
print_r($merge);
echo "<br>";
$common=array_intersect($array1,$array2); //common elements
print_r($common); 
$diff=array_diff($array1,$array2); //delete array 2 elemets from array1
print_r($diff);
$filter=array_filter($array1,function)
?>