<html>

`

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Include Example</title>
</head>
<body>

    <h1>Welcome to Our Website</h1>
    <nav>
        <a href="index.php?page=about">About</a> |
        <a href="index.php?page=contact">Contact</a> |
        <a href="index.php?page=home">Home</a>
    </nav>

    <div>
        <?php
        // Default page
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Sanitize the page input to avoid directory traversal
        $allowed_pages = ['head', 'foot', 'footer'];
        if (in_array($page, $allowed_pages)) {
            $file = $page . '.php';

            // Check if the file exists and include it
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<p>Sorry, the page you are looking for does not exist.</p>";
            }
        } else {
            echo "<p>Invalid page selection.</p>";
        }
        ?>
    </div>

</body>
</html>


?>
</body>
</html>