<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Environment Variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>System Environment Variables</h1>

<?php
// Set a custom environment variable using putenv()
putenv("CUSTOM_VAR=This is a custom variable");

// Environment variables to display
$variables = [
    'Operating System' => php_uname(),
    // php_uname() Retrieves information about the operating system.
    'User' => getenv('USER') ?: getenv('USERNAME'), // Handles different OS
    //getenv('USER') or getenv('USERNAME'): Retrieves the username of the user running the script. This works differently on Linux (USER) and Windows (USERNAME), so both are checked.
    'Hostname' => gethostname(),
   //  Retrieves the system's hostname.
    'Custom Variable' => getenv('CUSTOM_VAR'), // Use getenv() to fetch the custom variable  Sets a custom environment variable (CUSTOM_VAR), which is then displayed using $_ENV or getenv().
];

// Display environment variables in a table
echo "<table>";
echo "<tr><th>Variable</th><th>Value</th></tr>";
foreach ($variables as $var => $value) {
    echo "<tr><td>{$var}</td><td>{$value}</td></tr>";
}
echo "</table>";

?>

</body>
</html>
