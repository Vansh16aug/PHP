<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// Auto-logout after 10 minutes of inactivity
if (time() - $_SESSION['start_time'] > 600) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

// Refresh session timer
$_SESSION['start_time'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION['user']); ?>!</h1>
    <p>Last Login: <?= $_SESSION['last_login']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
