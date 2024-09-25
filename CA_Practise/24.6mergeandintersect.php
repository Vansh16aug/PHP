<?php
// Indexed arrays
$array1 = [1, 3, 5, 7, 9];
$array2 = [3, 7, 11, 15];

// Merging arrays
$mergedArray = array_merge($array1, $array2); //Combines two or more arrays into one.
echo "<h3>Merged Array:</h3>";
print_r($mergedArray);
echo "<br><br>";

// Intersecting arrays
$intersectedArray = array_intersect($array1, $array2); // Returns an array containing all the values present in all the arrays provided.
echo "<h3>Intersected Array:</h3>";
print_r($intersectedArray);
?>
