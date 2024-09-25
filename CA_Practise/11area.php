<?php
// Rectangle Area Calculation
$length = 10;
$width = 5;
$areaRectangle = $length * $width;
echo "The area of the rectangle is: " . $areaRectangle . " square units\n";

// Square Area Calculation
$side = 6;
$areaSquare = $side * $side;
echo "The area of the square is: " . $areaSquare . " square units\n";

// Triangle Area Calculation (using base and height)
$base = 8;
$height = 4;
$areaTriangle = 0.5 * $base * $height;
echo "The area of the triangle is: " . $areaTriangle . " square units\n";

// Circle Area Calculation
$radius = 7;
$areaCircle = pi() * $radius * $radius;
echo "The area of the circle is: " . number_format($areaCircle, 2) . " square units\n";
?>