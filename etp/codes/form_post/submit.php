<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize the form data
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<p>Invalid email format. Please try again.</p>");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "registration_db";

    // Create a connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) { 
        die("<p>Connection failed: " . $conn->connect_error . "</p>");
    }

    // Insert the data into the database
    $sql = "INSERT INTO users (first_name, last_name, email, password) 
            VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Registration Successful</h2>";
        echo "<p><strong>First Name:</strong> $first_name</p>";
        echo "<p><strong>Last Name:</strong> $last_name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p>Your data has been saved securely.</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }

    // Close the connection
    $conn->close();
} else {
    echo "<p>Invalid request method.</p>";
}
?>
