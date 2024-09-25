<?php
// Associative array of products with prices
$products = [
    "Laptop" => 1200,
    "Tablet" => 600,
    "Smartphone" => 900,
    "Desktop" => 1500
];
echo "<h3> Actual Products </h3>";
foreach($products as $product =>$price){
    echo "$product has prize $price <br>";
}

// The asort() function sorts an associative array in ascending order, according to the value.
asort($products);  

echo "<h3>Products sorted by price i.e by value (ascending):</h3>";
foreach ($products as $product => $price) {
    echo "$product: \$$price<br>";
}

echo "<br>";
echo "<br>";
ksort($products);  

echo "<h3>Products sorted by product i.e key (ascending):</h3>";
foreach ($products as $product => $price) {
    echo "$product: \$$price<br>";
}

// Sort the array by value in descending order
arsort($products);  

echo "<h3>Products sorted by price i.e by value (descending):</h3>";
foreach ($products as $product => $price) {
    echo "$product: \$$price<br>";
}

echo "<br>";
echo "<br>";
krsort($products);  

echo "<h3>Products sorted by product i.e key (descending):</h3>";
foreach ($products as $product => $price) {
    echo "$product: \$$price<br>";
}

?>
