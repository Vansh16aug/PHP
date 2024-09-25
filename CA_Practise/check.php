<?php
// $x=4;
// function display(){
//     echo $x;
// }

function myfunction() {
  $GLOBALS["x"] = 100;
}
myfunction();
echo $GLOBALS["x"];
echo $x;


?>