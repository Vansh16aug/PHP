<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Include Example</title>
</head>
<body>

    <h1>Choose a page to display</h1>

    <!-- Form with a select tag to choose a page -->
    <form method="get" action="">
        <label for="page">Select a page:</label>
        <select name="page" id="page">
            <option value="foot">foot</option>
            <option value="head">head</option>
            <option value="header">header</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <div>
        <?php
        // Default file to include
        $page = isset($_GET['page']) ? $_GET['page'] : null;

        if ($page) {
            // Construct the file name based on the user's selection
            $file = $page . ".php";

            // Check if the file exists before including
            if (file_exists($file)) {
                include($file);
            } else {
                echo "<p>Sorry, the page you requested does not exist.</p>";
            }
        }
        ?>
    </div>

</body>
</html>
