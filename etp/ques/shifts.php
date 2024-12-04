<?php
$employees = [
    ["name" => "John", "shift" => "Morning", "hours" => [8, 8, 8, 8, 8, 0, 0]],
    ["name" => "Jane", "shift" => "Evening", "hours" => [6, 6, 6, 6, 6, 0, 0]],
    ["name" => "Alex", "shift" => "Night", "hours" => [10, 10, 10, 10, 10, 0, 0]],
];

foreach ($employees as $employee) {
    $totalHours = array_sum($employee['hours']);
    echo "Employee: {$employee['name']} | Shift: {$employee['shift']} | Total Hours: $totalHours <br>";
}
?>
