<?php
$ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34];
$unique= array_unique($ages); //printing unique elements
print_r ("The unique elements in an arrays is ");
print_r ($unique);
echo "<br>";
$totelements= count($unique);  //count number of unique elements
echo "The total num of unique elements is $totelements";
echo "<br>";
echo "The array is acending order is: ";
sort($unique);  //sort the array in ascending order
echo"<pre>";
 print_r ($unique); 
echo "</pre>";
echo "<br>";
rsort($unique); //sort the array in descending order
echo "The array is descending order is: ";
print_r ($unique);
echo "<br>";
echo "<br>";
echo "The max in array is".max($unique);  //display the max element
echo "The min in array is".min($unique);  //display the min element
// $sort=asort($unique);

// print_r($sort);
?>