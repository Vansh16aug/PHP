<?php

$fruits = array("apple", "banana", "orange");

// Method 1: for loop
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

// Method 2: foreach loop
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Method 3: while loop
$index = 0;
while ($index < count($fruits)) {
    echo $fruits[$index] . "<br>";
    $index++;
}

// Method 4: do-while loop
$index = 0;
do {
    echo $fruits[$index] . "<br>";
    $index++;
} while ($index < count($fruits));

?>


