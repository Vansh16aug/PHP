<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Step 1: Get input from the form
    $input = $_POST['products'];

    // Step 2: Create an array from the input
    $productArray = array_map('trim', explode(',', $input));

    // Step 3: Remove duplicates and sort the array alphabetically
    $productArray = array_unique($productArray);
    sort($productArray);

    // Step 4: Display the sorted product list
    echo "<h2>Sorted Product List:</h2>";
    echo "<ul>";
    foreach ($productArray as $product) {
        echo "<li>" . htmlspecialchars($product) . "</li>";
    }
    echo "</ul>";

    // Step 5: Write the sorted product names to a text file
    $filePath = 'products.txt';
    file_put_contents($filePath, implode("\n", $productArray));
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Product List Form</title>
</head>
<body>
    <h1>Enter Product Names</h1>
    <form method="POST">
        <label for="products">Product Names (comma-separated):</label><br>
        <input type="text" id="products" name="products" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
