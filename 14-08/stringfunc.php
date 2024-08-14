<?php

// String length
$length = strlen("Hello World");
echo "String length: " . $length . "<br>";

// String to lowercase
$lowercase = strtolower("HELLO WORLD");
echo "String to lowercase: " . $lowercase . "<br>";

// String to uppercase
$uppercase = strtoupper("hello world");
echo "String to uppercase: " . $uppercase . "<br>";

// Substring
$substring = substr("Hello World", 6, 5);
echo "Substring: " . $substring . "<br>";

// String concatenation
$concatenation = "Hello" . " " . "World";
echo "String concatenation: " . $concatenation . "<br>";

// String replace
$replace = str_replace("World", "Universe", "Hello World");
echo "String replace: " . $replace . "<br>";

// String reverse
$reverse = strrev("Hello World");
echo "String reverse: " . $reverse . "<br>";

// String trimming
$trimmed = trim("   Hello World   ");
echo "String trimming: " . $trimmed . "<br>";

// String splitting
$split = explode(" ", "Hello World");
echo "String splitting: ";
print_r($split);
echo "<br>";

// String joining
$join = implode(",", ["Hello", "World"]);
echo "String joining: " . $join . "<br>";

?>