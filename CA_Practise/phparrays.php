<?php
// $cars=array ("zen","Maruti","Fiat");
// for ($i=sizeof($cars)-1;$i>=0;$i--){
//     echo $cars[$i];
//     echo "<br>";
// }
// $reverse=array_reverse($cars,true); //by default it is false if we write true then index is maintained
// echo"The reverse of cars is";
// print_r($reverse);
// $ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34];
// $unique=array_unique($ages);
// print_r($unique);
// echo "<br>";
// $asc=sort($unique);  // This function sorts the $unique array in ascending order.
// // It sorts the array in place and returns true on success, but it does not return the sorted array itself.
// print_r($asc);
// echo "<br>";
// sort($unique);
// print_r($unique);
// echo "Tha max element in unique".max($unique);
// echo "Tha min element in unique".min($unique);
$products = [ "Laptop" => 1200, "Tablet" => 600, "Smartphone" => 900, "Desktop" => 1500 ];
print_r($products);
echo "the array after sorting by values";
asort($products);
echo "<br>";
echo "<br>";
print_r($products);
echo "the array after sorting by values in desc";
arsort($products);
print_r($products);
echo "<br>";
echo "<br>";
echo "the array after sorting by keys in asc";
ksort($products);
print_r($products);
echo "<br>"; echo "<br>";
echo "the array after sorting by keys in desc";
krsort($products);
print_r($products);
$array1 = [1, 3, 5, 7, 9]; 
$array2 = [3, 7, 11, 15];
$merge=array_merge ($array1,$array2);
print_r($merge);
$common=array_intersect($array1,$array2); //common elements
print_r($common);
$diff=array_diff($array1,$array2); //delete array 2 elemets from array1
print_r($diff);
$numbers = [10, 20, 30, 40, 50];
array_pop($numbers);
print_r($numbers);
array_shift($numbers);
print_r($numbers);
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
print_r($cars);

?>