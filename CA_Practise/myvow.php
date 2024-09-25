<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action=" ">
<label for="str"> Enter the string</label>
<input type="text" id="str" name="str" placeholder="Enter here" required>
<input type="submit" value="Click here to print vowels in a string">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $str=$_POST("str");
    $tot_vow=0;
    $vow=["a","e","i","o","u"];
$strtolower=strtolower($str);
for ($i=0;$i<strlen($str);$i++){

    if(in_array($strtolower),$vow){
        $tot_vow++;
        
    }
}

}


?>
</body>
</html>