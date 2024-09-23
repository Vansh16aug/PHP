<?php

// Define employees and their skills
$employees = [
    [
        'name' => 'John',
        'skills' => ['programming', 'design'],
        'shifts' => [],
        'hours_worked' => 0
    ],
    [
        'name' => 'Jane',
        'skills' => ['programming', 'testing'],
        'shifts' => [],
        'hours_worked' => 0
    ],
    // Add more employees here...
];

// Define shifts and their required skills
$shifts = [
    [
        'shift_id' => 1,
        'shift_name' => 'Morning',
        'skills_required' => ['programming']
    ],
    [
        'shift_id' => 2,
        'shift_name' => 'Evening',
        'skills_required' => ['design']
    ],
    // Add more shifts here...
];

// Assign shifts to employees
foreach ($shifts as $shift) {
    $shift_id = $shift['shift_id'];
    $shift_name = $shift['shift_name'];
    $skills_required = $shift['skills_required'];

    // Find an employee with matching skills, available shifts, and no shift conflict
    foreach ($employees as &$employee) {
        if (count(array_intersect($employee['skills'], $skills_required)) > 0 && count($employee['shifts']) < 5 && !in_array($shift_name, $employee['shifts'])) {
            $employee['shifts'][] = $shift_name;
            $employee['hours_worked'] += 8; // Assuming each shift is 8 hours
            break;
        }
    }
}

// Display assigned shifts and work hours for each employee
foreach ($employees as $employee) {
    echo "Employee: " . $employee['name'] . "<br><br>";
    echo "Assigned Shifts: " . implode(', ', $employee['shifts']) . "<br><br>";
    echo "Total Hours Worked: " . $employee['hours_worked'] . "<br><br>";
    echo "<br>";
}

// Generate shift report listing all employees
echo "Shift Report:<br><br>";
foreach ($shifts as $shift) {
    $shift_name = $shift['shift_name'];
    echo "Shift: " . $shift_name . "<br><br>";
    echo "Assigned Employees: ";
    $assigned_employees = [];
    foreach ($employees as $employee) {
        if (in_array($shift_name, $employee['shifts'])) {
            $assigned_employees[] = $employee['name'];
        }
    }
    echo implode(', ', $assigned_employees) . "<br><br>";
    echo "<br>";
}
?>