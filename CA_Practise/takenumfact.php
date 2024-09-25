<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
    
    <!-- Form to take input from the user -->
    <form method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    $n=$_POST[number];
function factorial($n) {
    if ($n < 0) {
        return "Error: Factorial of a negative number doesn't exist.";
    } elseif ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5);  // Outputs 120
echo "<br>";
echo PHP_EOL;
echo factorial(-3); // Outputs error message
?>
</body>