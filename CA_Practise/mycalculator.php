<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>MINI CALCULATOR</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<form action="" method="POST">

    <label for="firstnum">Enter 1st Number</label>
    <input type="number" id="num1" name="firstnum" required>
<br>
<br>
    <label for="secondnum">Enter 2nd Number</label>
    <input type="number" id="num2" name="secondnum" required>
<br>

  <button type="submit" class="btn btn-primary" value="+">+</button>
  <!-- <button type="submit" class="btn btn-primary" value="-">-</button>
  <button type="submit" class="btn btn-primary" value="*">*</button>
  <button type="submit" class="btn btn-primary" value="/">/</button> -->
</form>
 
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$n1=$_POST['firstnum'];
$n2=$_POST['secondnum'];
$add=$n1+$n2;
echo"<h4> the result of my addition is $add </h4>";
}

?>


  </body>
</html>