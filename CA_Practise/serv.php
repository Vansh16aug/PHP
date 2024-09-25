<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server and Client Info</title>
</head>
<body>

    <h1>Server and Client Information</h1>
    //$_SERVER is a special reserved PHP variable that contains all web server information.
    <ul>
        <!-- Display Client's IP Address -->
        <li><strong>Client IP Address:</strong> 
            <?php echo $_SERVER['REMOTE_ADDR']; ?>
        </li>

        <!-- Display Web Server Software Name and Version -->
        <li><strong>Web Server Software:</strong> 
            <?php echo $_SERVER['SERVER_SOFTWARE']; ?>
        </li>

        <!-- Display Request Method -->
        <li><strong>Request Method:</strong> 
            <?php echo $_SERVER['REQUEST_METHOD']; ?>
        </li>

        <!-- Display Script Name and Path -->
        <li><strong>

        <?php 
echo $_SERVER['PHP_SELF'];  //	Returns the filename of the currently executing script
echo "<br>";
echo $_SERVER['SERVER_NAME']; //	Returns the path of the current script
echo "<br>";
echo $_SERVER['HTTP_HOST']; //	Returns the Host header from the current request
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

echo "<br>";
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    echo 'You are using Chrome.';
}

echo $_SERVER['SCRIPT_NAME']; //	Returns the path of the current script
        ?>