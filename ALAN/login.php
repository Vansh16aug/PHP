<?php
    require './config.php';

    //check for login
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Login successful";
            session_start();
            $_SESSION['user_id'] = $result->fetch_assoc()['id'];
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Invalid credentials";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="POST" action="login.php">
		<label for="username">Username:</label>
		<input type="username" name="username" id="username" required>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required>

		<button type="submit">Login</button>
	</form>
    <p><a href="register.php">Register</a></p>
</body>
</html>