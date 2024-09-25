<?php 
function add($x,$y){
    $z=$x+$y;
    return $z;
}
echo add(4,3)."<br>";
echo add(5,6);
// function fxn(int $a, int $b) {
//   echo $a + $b;
//    }
// // //   fxn(2, "3 semesters");  //error
// //   function addNumbers(int $a, int $b) {
// //     return $a + $b;
// //   }
// //   echo addNumbers(5, "5 days");

// if(is_numeric("guru"))      //if(is_numeri(123))   then output: true
// { 
// echo "true";
//  } 
// else { echo "false";
//  } 
echo date("d")."<br>"; //The day of the month (from 01 to 31)
echo date("D")."<br>"; //A textual representation of a day (three letters)
echo date("j")."<br>"; 
echo date("l")."<br>"; 
echo date("N")."<br>"; 
echo date("S")."<br>"; 
echo date("w")."<br>"; 
echo date("z")."<br>"; 
echo date("F")."<br>"; 
echo date("m")."<br>"; 
print_r(getdate()) ."<br>";
echo "Today's date is :";
  $today = date("d/m/Y");
  echo $today;
?>

