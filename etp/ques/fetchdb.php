<?php

$conn = new mysqli("localhost", "root", "");

// Check connection
if ($conn->connect_errno) {
    die("Failed to connect: " . $conn->error);
}

$dbname = "company";
$createDB = "CREATE DATABASE IF NOT EXISTS $dbname";

// Create database
if ($conn->query($createDB) === true) {
    echo "DB Created<br>";
} else {
    echo "No DB created<br>";
}

// Select the database to use
$conn->select_db($dbname);

// Create table
$query = "CREATE TABLE IF NOT EXISTS staff (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    department VARCHAR(255),
    salary DECIMAL(10,2)
)";

if ($conn->query($query) === true) {
    echo "Table Created<br>";
} else {
    echo "No table created<br>";
}

// Insert data
$data = "INSERT INTO staff (name, department, salary) VALUES
    ('Alice', 'Sales', 5000),
    ('Bob', 'Sales', 4500),
    ('Charlie', 'Sales', 5500),
    ('David', 'Sales', 3800),
    ('Eve', 'Marketing', 6000)";

if ($conn->query($data) === true) {
    echo "Data Inserted<br>";
} else {
    echo "No data inserted<br>";
}

// Run the SELECT query
$sql = "SELECT department, COUNT(*) as total_employees
FROM staff
WHERE department = 'Sales' AND salary > 4000
GROUP BY department
ORDER BY salary ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Department: " . $row["department"] . " | Total Employees: " . $row["total_employees"] . "<br>";
    }
} else {
    echo "No results found<br>";
}

// Close the connection
$conn->close();

?>
