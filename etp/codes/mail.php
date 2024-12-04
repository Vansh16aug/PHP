<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']); // User's email address
    $message = htmlspecialchars($_POST['message']);

    $to = $email; // Send the mail to the user's email
    $subject = "Thank you for contacting us!";
    // $headers = "From: support@yourdomain.com\r\n"; // Replace with your domain's email
    // $headers .= "Reply-To: support@yourdomain.com\r\n";
    // $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Hello $name,\n\n";
    $body .= "Thank you for reaching out to us. We have received your message and will get back to you shortly.\n\n";
    $body .= "Your message was:\n$message\n\n";
    $body .= "Best regards,\nYour Company Name";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $subject, $body)) {
                echo "<script>alert('Thank you! A confirmation email has been sent to your email address.');</script>";
            
            
        } 
    }else {
        echo "<script>alert('Sorry, your message could not be sent. Please try again later.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 15px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background: #333;
            color: #fff;
            border: 0;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>
