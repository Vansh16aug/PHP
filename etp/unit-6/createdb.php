<?php
    // Connect to MySQL server (without specifying a database)
    $conn = new mysqli("localhost","root","");
    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }
    // Step 1: Create the database if it doesn't exist
    $dbname = "myDatabase";
    $sqlCreateDb = "CREATE DATABASE IF NOT EXISTS $dbname";
    if($conn -> query($sqlCreateDb) === TRUE){
        echo "new database created";
    }
    else die( "error occured" . $conn -> error);

    // Step 2: Connect to the newly created database
    $conn -> select_db($dbname);

    // Step 3: Create the table if it doesn't exist
    $sqlCreateTable = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL
    )
    ";
    if($conn -> query($sqlCreateTable) === TRUE){
        echo "Table created successfully or already exists.<br>";
    } else {
        die("Error creating table: " . $conn->error);
    }

    // Step:4 handle form
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];

        $insertData = "INSERT INTO users (name,email) VALUES ('$name','$email')";
        if($conn -> query($insertData) === TRUE){
            echo "Data inserted";
        }
        else{
            die("error occured" . $conn -> error);
        }
    }
?>
<form action="" method="post">
    Name: <input type="text" name="name" required/><br> 
    Email: <input type="email" name="email" required/><br> 
    <button type="submit">submit</button>
</form>