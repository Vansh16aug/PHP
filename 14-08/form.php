

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" placeholder="Enter first number" required>
        <br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" placeholder="Enter second number" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        // Example: Sum the two numbers
        $sum = $num1 + $num2;
        
        echo "The sum of $num1 and $num2 is $sum.";
    }
    ?>
</body>
</html>
