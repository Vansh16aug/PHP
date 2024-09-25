<?php
// Marks in 5 subjects
$subject1 = 85;
$subject2 = 78;
$subject3 = 52;
$subject4 = 44;
$subject5 = 88;

// Total marks
$total_marks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

// Maximum marks possible (assuming each subject is out of 100)
$max_marks = 500;

// Calculate percentage
$percentage = ($total_marks / $max_marks) * 100;

// Determine the grade based on the percentage
if ($percentage >= 90 && $percentage <=100) {
    $grade = "A+";
} 
elseif ($percentage >= 80 && $percentage <90) {
    $grade = "A";
} elseif ($percentage >= 70 && $percentage <80) {
    $grade = "B+";
} elseif ($percentage >= 60 && $percentage <70) {
    $grade = "B";
} elseif ($percentage >= 50 && $percentage <60) {
    $grade = "C";
} elseif ($percentage >= 40 && $percentage <50) {
    $grade = "D";
} else {
    $grade = "F";
}

// Output the results
echo "Total Marks: $total_marks / $max_marks<br>";
echo "Percentage: $percentage%<br>";
echo "Grade: $grade<br>";
?>