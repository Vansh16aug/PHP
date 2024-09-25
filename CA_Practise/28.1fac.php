<!-- Write a recursive function to calculate the factorial of a number. If the number is negative, return a custom error message using an if-else condition. -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form method="POST" action="">
        <label for="num">Enter the number </label>
        <input type="number" name="num" required placeholder="Enter num">
        <input type="submit" value="Find Factorial">
        
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
$n=$_POST['num'];
function factorial($n) {
    if ($n < 0) {
        return "Error: Factorial of a negative number doesn't exist.";
    } elseif ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }

}

 $result=factorial($n); 
 echo "<h1> factorial of a num entered by the user is $result </h1>";

    }

?>

 </body>
 </html>
