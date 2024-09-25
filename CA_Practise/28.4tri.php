<?php
function triangleType($a, $b, $c) {
    // First, check if the sides can form a triangle
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Invalid: The given sides do not form a valid triangle.";
    }

    // Check for Equilateral Triangle: All sides are equal
    elseif ($a === $b && $b === $c) {
        return "Equilateral: All sides are equal.";
    }

    // Check for Isosceles Triangle: Any two sides are equal
    elseif ($a === $b || $a === $c || $b === $c) {
        return "Isosceles: Two sides are equal.";
    }
    // If none of the above, it's a Scalene Triangle: All sides are different
    return "Scalene: All sides are different.";
}

// Test the function with different triangle sides
echo triangleType(3, 3, 3) . "<br>"; // Outputs: Equilateral: All sides are equal.
echo triangleType(3, 4, 4) . "<br>"; // Outputs: Isosceles: Two sides are equal.
echo triangleType(3, 4, 5) . "<br>"; // Outputs: Scalene: All sides are different.
echo triangleType(1, 2, 3) . "<br>"; // Outputs: Invalid: The given sides do not form a valid triangle.
?>
