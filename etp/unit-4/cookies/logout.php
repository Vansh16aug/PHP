<?php
session_start();

// Destroy session variables
session_unset();
session_destroy();

setcookie("username" , "" , time() - 3600, "/");
setcookie("password" , "" , time() - 3600, "/");

header("Location: cookieBasedLogin.php");
exit;
?>