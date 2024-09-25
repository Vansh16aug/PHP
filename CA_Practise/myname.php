<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action=" " method="post">
    <label for="str"> Enter the string</label>
    <input type="text" name="str" id="str" placeholder="enter here" required>
    <input type="submit" value="Click to find vowels">
   </form>
   <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $str=$_POST["str"];
    $noofvow=0;
$vow=array["a","e","i","o","u"];
}
   ?>
</body>
</html>