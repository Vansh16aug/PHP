<?php 
    $name = $email = $password = "";
    $nameErr = $emailErr = $passwordErr = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name'])){
            $nameErr = "name cannot be empty";
        }
        else{
            $name = htmlspecialchars($_POST['name']);
        }

        if(empty($_POST['email'])){
            $emailErr = "email cant be empty";
        }
        else if(!filter_var(($_POST['email']),FILTER_VALIDATE_EMAIL)){
            $emailErr = "enter valid email";
        }
        else{
            $email = htmlspecialchars($_POST['email']);
        }

        if(empty($_POST['password'])){
            $passwordErr = "password cant be empty";
        }
        else if(strlen($_POST['password']) < 8){
            $passwordErr = "password must be 8 digits long";
        }
        else if(!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*\W).{8,}$/', $password)){
            $passwordErr = "password should have special characters";
        }
        else{
            $password = htmlspecialchars($_POST['password']);
        }
    }
?>

<form action="" method="post">
    name: <input type="text" name="name" /> <?php echo $nameErr ?><br>
    email: <input type="email" name="email" /> <?php echo $emailErr ?><br>
    password: <input type="password" name="password" /> <?php echo $passwordErr ?><br>
    <button type="submit">Register</button>
</form>