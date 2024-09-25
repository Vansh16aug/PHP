<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
      Enter Name  <input type="text" name="name" placeholder="Enter Name" required>
      Enter Age  <input type="number" name="age" placeholder="Enter Age" required>
      Enter Email-Id  <input type="text" name="email" placeholder="Enter Age" required>
      <input type="submit" value="Submit">

    </form>
    <?php
// if($_SERVER['REQUEST_METHOD']=="GET")
// {
// $name=$_GET['name'];
// $age=$_GET['age'];
// $email=$_GET['email'];
// echo "<h1> Your Name is $name and Your age is $age and email id is $email";
// } 
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];

  // Display the output only if the form is submitted
  echo "<h1>Your Name is $name, Your age is $age, and your email id is $email</h1>";
  
}
   ?>
</body>
</html>