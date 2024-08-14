<?php

// Initialize an array
$myArray = array(1, 2, 3, 4, 5);

// Accessing array elements
echo "Element at index 0: " . $myArray[0] . "<br>";
echo "Element at index 2: " . $myArray[2] . "<br>";

// Modifying array elements
$myArray[1] = 10;
echo "Modified element at index 1: " . $myArray[1] . "<br>";

// Adding elements to an array
$myArray[] = 6;
echo "Added element at the end: " . $myArray[5] . "<br>";

// Removing elements from an array
unset($myArray[3]);
echo "After removing element at index 3: ";
print_r($myArray);

// Counting the number of elements in an array
echo "Number of elements in the array: " . count($myArray) . "<br>";

// Checking if an element exists in an array
if (in_array(4, $myArray)) {
    echo "Element 4 exists in the array<br>";
} else {
    echo "Element 4 does not exist in the array<br>";
}

// Sorting an array
sort($myArray);
echo "Sorted array: ";
print_r($myArray);
echo "<br>";

// Traversing an array
echo "Array elements: ";
foreach ($myArray as $element) {
    echo $element . " ";
}

?>