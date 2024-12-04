<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit();
    }

    $quotes = [
	'If you want to achieve greatness, stop asking for permission.',
	'Think big and don\'t listen to people who tell you it can\'t be done.',
	'The only way to do great work is to love what you do.',
	'Success is not final, failure is not fatal: it is the courage to continue that counts.',
	'Believe you can and you\'re halfway there.'
    ];

    $quote = $quotes[array_rand($quotes)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
	<p>Here's a random quote:</p>
	<blockquote>
		<?php echo $quote; ?>
	</blockquote>
	<p><a href="logout.php">Logout</a></p>
</body>
</html>