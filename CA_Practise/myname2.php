<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="str">Enter the string</label>
        <input type="text" id="str" name="str" placeholder="Enter here" required>
        <br>
        <input type="submit" value="Click to find no of vowels">
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $str=$_POST["str"];
    $strtolowr=strtolower($str);
    $countvow=0;
    $vow=["a","e","i","o","u"];
for($i=0;$i<strlen($strtolowr);$i++){
if(in_array($strtolowr[$i],$vow)){
    $countvow++;
}

}
echo "<h1> The count of vowel in a string is $countvow";
}

?>

</body>
</html>