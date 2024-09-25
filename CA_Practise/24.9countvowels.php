<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="string">Enter the String:</label>
        <input type="text" name="string" placeholder="Enter the string" required>
        <br><br>
        <input type="submit" value="Click to count the number of vowels in a string">
    </form>

<?php
// Function to count vowels in a string
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['string'];
    
    // Count the number of vowels in the user input
    $vowels = count_vowels($str);
    // Display the result
    echo "The number of vowels in the string is: " . $vowels;
}
function count_vowels($str) {
    // Convert the string to lowercase to make the function case-insensitive
    $str = strtolower($str);
    
    // Initialize vowel count
    $vowel_count = 0;
    
    // Define an array of vowels
    $vowels = array('a', 'e', 'i', 'o', 'u');
    
    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        // Check if the character is a vowel
        if (in_array($str[$i], $vowels)) {
            $vowel_count++;
        }
    }
    
    return $vowel_count;
}


?>
</body>
</html>
