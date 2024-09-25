<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
//The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function
print_r($lengths);
?>