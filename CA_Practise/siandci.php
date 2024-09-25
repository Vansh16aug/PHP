<!DOCTYPE html>
<html>
<head>
    <title>Interest Calculator</title>
</head>
<body>

<h2>Interest Calculator</h2>
<form method="post">
    Principal Amount: <input type="number" name="principal" required><br><br>
    Rate of Interest (% per annum): <input type="number" step="0.01" name="rate" required><br><br>
    Time (in years): <input type="number" name="time" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $principal = $_POST['principal'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];

    // Calculate Simple Interest
    $simple_interest = ($principal * $rate * $time) / 100;

    // Calculate Compound Interest
    $compound_interest = $principal * pow((1 + $rate / 100), $time) - $principal;

    // Output the results
    echo "<h3>Results:</h3>";
    echo "Principal Amount: $" . number_format($principal, 2) . "<br>";
    echo "Rate of Interest: " . number_format($rate, 2) . "% per annum<br>";
    echo "Time: " . number_format($time, 2) . " years<br><br>";
    echo "Simple Interest: $" . number_format($simple_interest, 2) . "<br>";
    echo "Compound Interest: $".number_format($compound_interest, 2) . "<br>";
}
?>

</body>
</html>