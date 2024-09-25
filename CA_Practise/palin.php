
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="vow"> Enter the String: </label>
        <input type="text" id="year "
 name="vow" placeholder="Enter the string" required>
 <br>
  <br>
 <input type="submit" value="Click to check whether the string is palindrome or not">
    </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $string=$_POST['vow'];
// Define a function to check if a string is a palindrome
function check_palindrome($string) 
{
    // Check if the reversed string is equal to the original string
    if ($string == strrev($string))
        echo "The string is palindrome"; // Return 1 if it is a palindrome
    else
    echo "The string is not palindrome";    
}
}
// Test the function with the string 'madam' and display the result
echo check_palindrome($string); // Output: 1 (true) since 'madam' is a palindrome
?>
</body>
</html>