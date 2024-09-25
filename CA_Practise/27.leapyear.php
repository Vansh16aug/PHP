<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="year"> Enter Year: </label>
        <input type="number" id="year "
 name="year" placeholder="Enter value here" required>
 <br>
  <br>
 <input type="submit" value="Click to check whether it is leap or not">
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $year=$_POST['year'];
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
        // A year is a leap year if “any one of ” the following conditions are satisfied: 
        //     The year is multiple of 400.
        //     The year is a multiple of 4 and not a multiple of 100.
        echo "<h1>$year is a leap year.</h1>";
    } else{
        echo "<h1>$year is not a leap year.</h1>    ";
    }
    
    
}

    ?>
</body>
</html>