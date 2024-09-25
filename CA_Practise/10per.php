<?php
// Example marks for 5 subjects
$subject1 = 78;
$subject2 = 85.5;
$subject3 = 90.5;
$subject4 = 88;
$subject5 = 76;

$totalMarksObtained = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

$totalMarksPossible = 500; // 5 subjects * 100 marks each

// Calculate percentage
$percentage = ($totalMarksObtained / $totalMarksPossible) * 100;

// Display the result
echo "The student's percentage is: " . number_format($percentage, 2) . "%";
?>