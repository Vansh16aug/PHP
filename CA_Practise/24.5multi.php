<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Multidimensional array to store student grades
$students = [
    "Alice" => ["Math" => 85, "Science" => 90, "English" => 78],
    "Bob" => ["Math" => 72, "Science" => 88, "English" => 85],
    "Charlie" => ["Math" => 95, "Science" => 92, "English" => 89]
];

// Function to calculate the average grade
function calculateAverageGrade($grades) {
    $total = array_sum($grades);
    $count = count($grades);
    return $total / $count;
}

// Display each student's average grade
foreach ($students as $student => $grades) {
    $average = calculateAverageGrade($grades);
    echo "Student: $student, Average Grade: " . round($average, 2) . "<br>";
}
?>

