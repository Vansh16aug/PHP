<!-- Write a PHP script to calculate the sum of the digits of a given number using a loop. -->
<?php
$number = 12345;
$sum = 0;

while ($number > 0) {
    $digit = $number % 10; // Get the last digit
    $sum += $digit;        // Add the digit to the sum
    $number = (int)($number / 10); // Remove the last digit
}

echo "The sum of the digits is: " . $sum;
?>
