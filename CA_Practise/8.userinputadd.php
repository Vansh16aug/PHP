<!DOCTYPE html>
<html>
<head>
    <title>Add Two Numbers</title>
</head>
<body>
<form method="POST" action="">
    <label for="num1">Enter first number:</label>
    <input type="number" name="num1" id="num1" required>
    <br><br>
    <label for="num2">Enter second number:</label>
    <input type="number" name="num2" id="num2" required>
    <br><br>
    <input type="submit" name="submit" value="Add Numbers">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {   //function in PHP is used to check if a form with a submit button has been submitted.
    $num1 = $_POST['num1'];  //is used to retrieve the value of the num1 field from a submitted form via the POST method in PHP.
    $num2 = $_POST['num2']; //is used to retrieve the value of the num1 field from a submitted form via the POST method in PHP.
    $sum = $num1 + $num2;

    echo "<h3>The sum of $num1 and $num2 is: $sum</h3>";
}
?>
</body>
</html>