<!DOCTYPE html>
<html>
<head>
    <title>Write User Input to File</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $message = $_POST['message'];

        $file = "user_data.txt";

        $handle = fopen($file, "w");

        if ($handle) {
            fwrite($handle, "Name: $name\nMessage: $message\n\n");

            fclose($handle);

            echo "Data has been written to the file successfully.";
        } else {
            echo "Error writing to file.";
        }
    }
    ?>

</body>
</html>