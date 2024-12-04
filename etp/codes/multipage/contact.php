<?php include 'includes/header.php'; ?>
<h2>Contact Page</h2>

<form action="contact.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <input type="submit" value="Submit">
</form>

<?php
// Include the database connection
require 'includes/db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO multipage1 (name) VALUES (?)");
    $stmt->bind_param("s", $name);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p>Data successfully submitted!</p>";
    } else {
        echo "<p>Error submitting data.</p>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<?php include 'includes/footer.php'; ?>
