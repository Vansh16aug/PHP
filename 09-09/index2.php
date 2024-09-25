<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    Enter the name : <input type="text" name="name" placeholder="Enter the name" required><br><br>
    Enetr the Age : <input type="text" name="age" placeholder="Enter the age" required ><br><br>
    Enter the email : <input type="text" name="email" placeholder="ENter the emial" required><br><br>
    <input type="submit" value="submit">
    </form>

    <?php 
    if($_SERVER['REQUEST_METHOD']=="GET"){  
        $name = $_GET['name'];
        $age = $_GET['age'];
        $email = $_GET['email'];
        echo "<h1> Your Name : $name and Your Age is : $age and Email is : $email</h1>";
    }
    ?>
    
</body>
</html>