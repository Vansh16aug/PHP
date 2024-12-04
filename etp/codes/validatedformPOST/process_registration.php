<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Input data
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validation checks
    $is_valid = true;

    // Check all fields are filled
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
        $is_valid = false;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $is_valid = false;
    }

    // Validate password requirements
    if (
        strlen($password) < 8 ||
        !preg_match('/[A-Z]/', $password) ||
        !preg_match('/[0-9]/', $password) ||
        !preg_match('/[\W]/', $password)
    ) {
        $is_valid = false;
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        $is_valid = false;
    }

    // Display results
    if ($is_valid) {
        echo "<h3>Registration Successful!</h3>";
    } else {
        echo "<h3>Incorrect Details</h3>";
    }
}
?>

