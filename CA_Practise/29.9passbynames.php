<!-- Demonstrate named arguments, allowing arguments to be passed by their names rather than by position. -->
<?php

function describePerson($name, $age, $city) {
    return "$name is $age years old and lives in $city.";
}

// Call the function using named arguments
echo describePerson(age: 25, name: "John", city: "New York");

?>
