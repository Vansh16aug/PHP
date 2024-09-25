<?php
// $x=9;  //Integer
// $y=8.9; //floating point
// $z="76"; //Number Strings
// echo "The data type of x is";
// echo var_dump($x);
// echo"<br>";
// echo "The data type of y is".var_dump($y)."<br>";
// echo "The data type of z is".var_dump($z)."<br>";
// echo "The maximum integer value in PHP is " . PHP_INT_MAX . "<br>";
// echo "The minimum integer value in PHP is " . PHP_INT_MIN . "<br>";
// echo "The SIZE of x integer value in PHP is " . PHP_INT_SIZE . "<br>"; //The integer size in bytes.


// var_dump(is_int($x)); //gives boolean value

// var_dump(is_int($y)); //gives boolean value
// echo "<br>";
// echo "<br>";
// if(is_int($x)){
//  if ($x > 0) {
//     echo "The number is integer and positive.\n";
// } elseif ($x < 0) {
//     echo "The number is integer and negative.\n";
// } else {
//     echo "The number is zero.\n";
// }
//     }
//     else{
//         echo $x ."is not an integer" . "<br>";
//     }
  
// $var=NULL;
// var_dump($var);
// var_dump( (int) $var);
// var_dump((float)$var);
// var_dump( (boolean) $var);
// echo "<br>";
// $courses = array("PHP", "Laravel", "Node js"); 
// echo "I like " . $courses[0] . ", " . $courses[1] . " and " . $courses[2];
// echo "<br>";
// echo count($courses);
// echo "<br>";
// var_dump($courses);  
// echo "<br>";


$name = "Amit is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Amit"); //return the character position starting from position 0
echo "<br>";
echo str_replace("Amit", "Rohan", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("    this is a good boy     ");
echo "<br>";
echo ltrim("    this is a good boy     ");
echo "</pre>";
  echo "<br>";
  //classes and objects
// class SayHello{
//    function hello(){
//       echo "Hello World";
//    }
// }
// $obj=new SayHello;
// $obj->hello();

?>