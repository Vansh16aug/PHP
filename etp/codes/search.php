<?php
$products = [
    ["name" => "Laptop", "price" => 500, "stock" => 10],
    ["name" => "Mouse", "price" => 20, "stock" => 50],
];

$search = $_POST['search'] ?? '';

foreach ($products as $product) {
    if (stripos($product['name'], $search) !== false) {
        echo "Name: {$product['name']}, Price: {$product['price']}, Stock: {$product['stock']}<br>";
    }
}
?>
<form method="POST">
    <input name="search" placeholder="Search Product">
    <button>Search</button>
</form>
