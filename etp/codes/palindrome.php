<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user input
    $inputString = $_POST['inputString'];

    // Remove non-alphanumeric characters and convert to lowercase
    $cleanString = preg_replace("/[^A-Za-z0-9]/", "", $inputString);
    $cleanString = strtolower($cleanString);

    // Check if the string is a palindrome
    $isPalindrome = true;
    $length = strlen($cleanString);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($cleanString[$i] !== $cleanString[$length - $i - 1]) {
            $isPalindrome = false;
            break;
        }
    }

    // Display the result
    if ($isPalindrome) {
        echo "The string '$inputString' is a palindrome.";
    } else {
        echo "The string '$inputString' is not a palindrome.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Check</title>
</head>
<body>
    <h1>Check if a String is a Palindrome</h1>
    <form method="POST">
        <label for="inputString">Enter a String:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Check</button>
    </form>
</body>
</html>
