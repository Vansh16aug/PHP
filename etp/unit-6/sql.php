<?php 
    $conn = new mysqli("localhost", "root","", "mydb");
    if($conn-> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if($conn->query($sql) === TRUE){        
            echo "New record created successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>