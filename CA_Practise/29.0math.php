//The deg2rad() function converts a degree value to a radian value.
<?php
// Example number to work with
$number = 16;
$angle = 45; // in degrees

// 1. Round off a number to the nearest whole number
$roundedNumber = round(4.7);
echo "Rounded value of 4.7: " . $roundedNumber . "\n";

// 2. Square root of a number
$sqrtNumber = sqrt($number);
echo "Square root of $number: " . $sqrtNumber . "\n";

// 3. Cosine of an angle (converting degrees to radians)
$cosine = cos(deg2rad($angle));
echo "Cosine of $angle degrees: " . $cosine . "\n";
////The deg2rad() function converts a degree value to a radian value.
// 4. Sine of an angle (converting degrees to radians)
$sine = sin(deg2rad($angle));
echo "Sine of $angle degrees: " . $sine . "\n";

// 5. Tangent of an angle (converting degrees to radians)
$tangent = tan(deg2rad($angle));
echo "Tangent of $angle degrees: " . $tangent . "\n";

// 6. Pi constant
$piValue = pi();
echo "Value of Pi: " . $piValue . "\n";
?>
