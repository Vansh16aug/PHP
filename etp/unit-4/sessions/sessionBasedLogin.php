<?php
    session_start();

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
        header("Location: welcome.php");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $valid_username = "vansh";
        $valid_pass = "123";

        $username = $_POST["username"];
        $password = $_POST["password"];

        if($valid_username == $username && $valid_pass == $password){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            header("Location: welcome.php");
            exit;
        }
        else{
            echo "Invalid login credentials";
        }
    }
?>

<form action="" method="post">
    username: <input type="text" name="username" />
    password: <input type="password" name="password" />
    <button type="submit"> login</button>
</form>