<?php 
    // Decode the list if it's passed in the POST request, otherwise use default items
    $groceryList = isset($_POST['list']) ? json_decode($_POST['list'], true) : ["Apples", "Bananas", "Carrots"];

    // Handle POST request to add an item
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item"])) {
        $item = htmlspecialchars($_POST["item"]);
        $groceryList[] = $item;  // Add item to the list
    }

    // Get the search term from GET request
    $search = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : "";
?>

<!-- Search form -->
<form action="" method="get">
    search item: <input type="text" name="search" value="<?php echo $search; ?>" />
    <button type="submit">Search</button>
</form>

<!-- Add item form -->
<form action="" method="post">
    add item: <input type="text" name="item" />
    <input type="hidden" name="list" value="<?php echo htmlspecialchars(json_encode($groceryList)); ?>">
    <input type="submit" value="Add">
</form>

<h3>Results</h3>
<ul>
    <?php
        // Loop through grocery list and check for search term
        foreach ($groceryList as $item) {
            // Use stripos() to check for case-insensitive search term in the item
            if (empty($search) || stripos($item, $search) !== false) {
                echo "<li>$item</li>";
            }
        }
    ?>
</ul>
