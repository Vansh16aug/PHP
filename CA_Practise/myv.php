<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
<label for="str">Enter the String</label>
<input type="text" id="str" name="str" placeholder="Enter here">
<input type="submit" value="Click to find no of vowels">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $str=$_POST["str"];
        $countvow=0;
        $vow=["a","e","i","o","u"];
        $strtolower=strtolower($tr);
        for($i=0;$i<strlen($strtolower);$i++){
            if(in_array($strtolower,$vow)){
                $countvow++;
            }
        }
        echo"<h1> The total Count of vowels is $countvow";
    }
    ?>
</body>
</html>