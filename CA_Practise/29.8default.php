<!-- Create a function with default arguments to demonstrate how default values work when parameters are omitted. -->
<?php

function greet($name, $greeting = "Hello") {
    return "$greeting, $name!";
}

// Calling the function with and without the default argument
echo greet("Alice") . "<br>";          // Using default greeting
echo greet("Bob", "Good morning") . "<br>"; // Providing a custom greeting

?>
