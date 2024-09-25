<?php
$cars=array("Fiat","Maruti","ZEN","BMW");
print_r($cars);
$cars[]="Mercedes"; //If u want to add at any particular index write [index no.] here
print_r($cars);
echo "<br>";
echo "<br>";


unset($cars[1]); //delete the element from the array
print_r($cars);
array_push($cars, "Audi","Scorpio");
echo "<br>";
print_r($cars);
echo "<br>";
$mycar = array("brand" => "Ford", "model" => "Mustang");
$mycar += ["color" => "red", "year" => 1964];
print_r($mycar);
// use array_splice for arrays with numerical indexes, and use unset only for arrays (dictionaries really) with non-numerical indexes.
echo "<br>";
array_splice($cars, 1, 1);
print_r($cars);
echo "<br>";
$name=array("Manoj","Rahul","Aneesh");
$marks=array("75","89","44");
$c=array_combine($name,$marks);
print_r($c);
echo "<br>";
$a=array("Block 33","Block 34","Block 34","Block 36","Block 36");
echo "the total number of array elements are";
print_r(array_count_values($a));
echo "<br>";
echo"The size of the array".count($a);

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_diff($a1,$a2);
// array_diff() returns a new array containing all the values of $arr1 that do not exist in $arr2
print_r($result);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1); //Flipping Keys and Values in an Associative Array
print_r($result);
echo "<br>";
$a1=array("red","green","blue","yellow");
$result=array_flip($a1);
print_r($result);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("red","blue");
$result=array_intersect($a1,$a2,$a3);  //eturns an array containing all the values present in all the arrays provided.
print_r($result);
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
$a=array("Volvo","BMW","Toyota");
print_r(array_reverse($a, true));
echo "<br>";
$a=array("Volvo","BMW","Toyota");
print_r(array_reverse($a, false));
echo"<br>";
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2));
echo"<br>";
$result = array(
    array('name'=>'Manoj','cgpa'=>6.7,'status'=>'pass'),
    array('name'=>"Shalini",'cgpa'=>9.8,'status'=>'pass'),
    array('name'=>'Mani','cgpa'=>3.2,'status'=>'fail')
    );
    $names = array_column($result, 'status', 'name');
    print_r($names);

?>