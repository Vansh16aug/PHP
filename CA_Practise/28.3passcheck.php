<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="pass">Enter the Pasword </label>
<input type="text" name="pass" required placeholder="enter password here">
<input type="submit" value="login">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $password=$_POST['pass'];
function isValidPassword($password) {
    $hasUppercase = preg_match('/[A-Z]/', $password);
    $hasLowercase = preg_match('/[a-z]/', $password);
    $hasNumber = preg_match('/[0-9]/', $password);
    $hasSpecialChar = preg_match('/[^\w]/', $password); // Checks for any character that is not a word character
    $isLongEnough = strlen($password) >= 8;

    // Check if all conditions are met using the AND operator
    if ($hasUppercase && $hasLowercase && $hasNumber && $hasSpecialChar && $isLongEnough) {
        return true;
    } else {
        return false;
    }
}
}
// Example usage
$password = "P@ssw0rd123";

if (isValidPassword($password)) {
    echo "Password is valid.";
} else {
    echo "Password is not valid.";
}
?>
