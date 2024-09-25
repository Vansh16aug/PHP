<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Enter the string</label>
        <input type="text" id="str" name="str" placeholder="Enter your name" required>
        <input type="submit" value="Click here to check no of vowels">

    </form>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $str=$_POST["str"];
    $strtolower=strtolower($str);
    $countofvow=0;
    $vowels=["a","e","i","o","u"];
    for($i=0; $i<strlen($strtolower);$i++){
        if(in_array($strtolower[$i],$vowels)){
            $countofvow++;
        }
    }
    echo"<h1> The vowels in the string is $countofvow <h1>";
}

?>
</body>
</html>