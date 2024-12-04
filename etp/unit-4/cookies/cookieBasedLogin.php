<?php 
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        $valid_username = "vansh";
        $valid_pass = "123";

        if($_COOKIE['username'] == $valid_username && $_COOKIE['password'] == $valid_pass){
            header("welcome.php");
            exit;
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $valid_username = "vansh";
        $valid_pass = "123";

        $username = $_POST["username"];
        $password = $_POST["password"];
        $remember_me = $_POST["remember_me"];

        if($username == $valid_username && $password == $valid_pass){
            if($remember_me){
                setcookie("username" , $username , time() + (86400 * 30) ,"/");
                setcookie("password" , $password , time() + (86400 * 30) ,"/");
            }
            header("Location: welcome.php");
            exit;
        }
        else{
            echo "Invalid login credentials.";
        }
    }
?>
<form action="" method="post">
    name: <input type="text" name="username" /><br>
    password: <input type="password" name="password" /><br>
    <label>
        <input type="checkbox" name="remember_me"> Remember Me
    </label><br>

    <button type="submit">Login</button>
</form>