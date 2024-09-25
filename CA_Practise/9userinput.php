<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Two Numbers</title>
</head>
<body>
    <h2>Add Two Numbers</h2>
    <form method="post" action="">

    //The form uses the POST method to submit the input values (num1 and num2) to the same page.
        <label for="num1">First Number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Second Number:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <input type="submit" value="Add" name="operation">
        <input type="submit" value="Sub" name="operation">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input values from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation){
case 'Add':
    $sum = $num1 + $num2;

   
       echo "<h3>The sum of $num1 and $num2 is: $sum</h3>"; 
       break;

       case 'Sub':
        $sub = $num1 - $num2;

        //     // Display the result
          echo "<h3>The subtraction of $num1 and $num2 is: $sub</h3>";
        break;
        default:
        echo "operation not found";
       }
// if($operation=="Add"){
//         // Perform the addition
//         $sum = $num1 + $num2;

//         // Display the result
//         echo "<h3>The sum of $num1 and $num2 is: $sum</h3>";
// }
// elseif($operation="Sub") {
//     $sub = $num1 - $num2;

//     // Display the result
//     echo "<h3>The subtraction of $num1 and $num2 is: $sub</h3>";
// }
//     }
    }
    ?>
</body>
</html>