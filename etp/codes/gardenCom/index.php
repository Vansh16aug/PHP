<?php
// Database connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "gardening_community";

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

session_start();
$message = "";

// Registration process
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gardening_style = $_POST['gardening_style'];

    if ($username && $email && $password && $gardening_style) {
        $query = "INSERT INTO users (username, email, password, gardening_style) VALUES ('$username', '$email', '$password', '$gardening_style')";
        if (mysqli_query($conn, $query)) {
            // Send a welcome email
            $subject = "Welcome to the Gardening Community!";
            $body = "Hi $username,\n\nWelcome to the Gardening Community! Enjoy connecting with fellow gardening enthusiasts.";
            $headers = "From: no-reply@gardening.com";
            mail($email, $subject, $body, $headers);

            // Set a cookie to remember the user
            setcookie("gardening_user", $username, time() + (86400 * 30), "/"); // 30 days

            $message = "Registration successful! A welcome email has been sent.";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    } else {
        $message = "All fields are required!";
    }
}

// Login process
if (isset($_POST['login'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];
    $remember_me = isset($_POST['remember_me']) ? true : false;

    // Check if account is locked
    $lock_query = "SELECT failed_attempts, lock_time FROM users WHERE email='$email'";
    $lock_result = mysqli_query($conn, $lock_query);
    if ($lock_result && $row = mysqli_fetch_assoc($lock_result)) {
        if ($row['failed_attempts'] >= 3 && time() - strtotime($row['lock_time']) < 900) {
            $message = "Account is locked. Please try again after 15 minutes.";
        } else {
            // Validate user
            $query = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $query);

            if ($result && $user = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];

                    // Reset failed attempts
                    $reset_query = "UPDATE users SET failed_attempts=0 WHERE email='$email'";
                    mysqli_query($conn, $reset_query);

                    // Set "Remember Me" cookie
                    if ($remember_me) {
                        setcookie("gardening_user", $user['username'], time() + (86400 * 30), "/"); // 30 days
                    }
                    header("Location: dashboard.php");
                    exit;
                } else {
                    // Increment failed attempts
                    $update_query = "UPDATE users SET failed_attempts = failed_attempts + 1, lock_time = NOW() WHERE email='$email'";
                    mysqli_query($conn, $update_query);
                    $message = "Invalid credentials. Try again.";
                }
            } else {
                $message = "User not found.";
            }
        }
    } else {
        $message = "Invalid credentials.";
    }
}

// Logout process
if (isset($_GET['logout'])) {
    session_destroy();
    setcookie("gardening_user", "", time() - 3600, "/"); // Delete cookie
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gardening Community Portal</title>
</head>
<body>
    <h1>Gardening Community Portal</h1>

    <!-- Registration Form -->
    <h2>Register</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <select name="gardening_style" required>
            <option value="Organic Gardening">Organic Gardening</option>
            <option value="Hydroponics">Hydroponics</option>
            <option value="Urban Gardening">Urban Gardening</option>
        </select><br>
        <button type="submit" name="register">Register</button>
    </form>

    <!-- Login Form -->
    <h2>Login</h2>
    <form method="POST">
        <input type="email" name="login_email" placeholder="Email" required><br>
        <input type="password" name="login_password" placeholder="Password" required><br>
        <input type="checkbox" name="remember_me"> Remember Me<br>
        <button type="submit" name="login">Login</button>
    </form>

    <!-- Display Messages -->
    <?php if ($message): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
</body>
</html>