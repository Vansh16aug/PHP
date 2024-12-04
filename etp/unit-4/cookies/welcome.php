<?php

// Check if the cookies are set and validate the user
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    // Sample hardcoded credentials for demonstration
    $valid_username = "vansh";
    $valid_password = "123";

    if ($_COOKIE['username'] == $valid_username && $_COOKIE['password'] == $valid_password) {
        echo "Welcome, " . $_COOKIE['username'] . "!";
    } else {
        echo "Invalid credentials stored in cookies.";
    }
} else {
    echo "You are not logged in.";
}
?>

<a href="logout.php">Logout</a>
