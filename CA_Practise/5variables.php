<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// $x="Amit is  a good boy";
// $y=60;
// echo "The marks of ". $x . "is". $y;
// echo "the student name is $x";  //double quotes
// echo 'the student name is' .$x; //single quotes
// echo "The Data type of variable".$x. "is" ."<br>" . var_dump($x);
// var_dump($y) . "<br>";
// var_dump(true). "<br>";
// var_dump(3.14);
// if(is_int($y)){
// if($y==0){
//     echo "The num is 0";
// }
// elseif ($y<0){
// echo "The integer is -ve";
// }
// else{
// echo "The integer is +ve";
// }
// }
// else{
// echo "The number is not an integer";
// }
// echo "The max value of an integer".PHP_INT_MAX;
// echo "the min value of an integer".PHP_INT_MIN;
// echo "<br>";
// echo "The size of the string".$x. "is". strlen($x);
// str_replace ("Amit","Rohan",$x); -->
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>
</body>
</html>