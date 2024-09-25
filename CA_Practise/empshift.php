<?php

// Employee data
$employees = ["Alice", "Bob", "Charlie", "Diana"];
$shifts = ["morning", "afternoon", "night"];
$work_hours = ["morning" => 8, "afternoon" => 8, "night" => 8];

// Array to store assigned shifts
$assigned_shifts = [];

// Function to assign a shift to an employee
function assign_shift($employee, $shift, &$assigned_shifts) {
    global $employees, $shifts;

    // Check if the shift is valid
    if (!in_array($shift, $shifts)) {
        echo "Invalid shift.\n";
        return false;
    }

    // Check if the employee is valid
    if (!in_array($employee, $employees)) {
        echo "Invalid employee.\n";
        return false;
    }

    // Assign the shift if no conflict
    if (check_shift_conflict($shift, $assigned_shifts)) {
        echo "Shift conflict for $employee.\n";
        return false;
    }

    // Assign shift to employee
    $assigned_shifts[$employee] = $shift;
    echo "$employee has been assigned to the $shift shift.\n";
    return true;
}

// Function to check for shift conflicts
function check_shift_conflict($shift, $assigned_shifts) {
    return in_array($shift, $assigned_shifts);
}

// Function to calculate and display work hours for each employee
function calculate_work_hours($employee, $assigned_shifts, $work_hours) {
    $shift = isset($assigned_shifts[$employee]) ? $assigned_shifts[$employee] : null;

    if ($shift) {
        return $work_hours[$shift];
    } else {
        return 0;
    }
}

// Function to generate shift report
function generate_shift_report($employees, $assigned_shifts, $work_hours) {
    echo "\nShift Report:\n";
    echo "---------------------------------\n";
    foreach ($employees as $employee) {
        $shift = isset($assigned_shifts[$employee]) ? $assigned_shifts[$employee] : "None";
        $hours = calculate_work_hours($employee, $assigned_shifts, $work_hours);
        echo "Employee: $employee | Shift: $shift | Work Hours: $hours hours\n";
    }
    echo "---------------------------------\n";
}

// Example usage
assign_shift("Alice", "morning", $assigned_shifts);
assign_shift("Bob", "afternoon", $assigned_shifts);
assign_shift("Charlie", "night", $assigned_shifts);
assign_shift("Diana", "morning", $assigned_shifts); // This will fail due to conflict

generate_shift_report($employees, $assigned_shifts, $work_hours);

?>
