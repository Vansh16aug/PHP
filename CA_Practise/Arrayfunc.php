<?php
$name=array("Manoj","Rahul","Aneesh");
$marks=array("75","89","44");
$c=array_combine($name,$marks);
print_r($c);  //The print_r() function prints the information about a variable in a more human-readable way.

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
echo "<br>";
$a1=array("red","green","blue","yellow");
$result=array_flip($a1);
print_r($result);
echo "<br>";
$a1=array("red","green", "blue");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
echo "<br>";
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
$a3=array("c"=>"orange","b"=>"magenta");
print_r(array_merge($a1,$a2,$a3));
echo "<br>";
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<br>"; 
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);







?>
