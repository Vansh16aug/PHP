<?php
$cars=array("zen","maruti","fiat");
print_r($cars);
$reverse=array_reverse($cars,true);
print_r($reverse);
//without using fxn
echo"<br>";
for ($i=sizeof($cars)-1;$i>=0;$i--){
    echo $cars[$i];
    echo"<br>";
}
$ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34];
$unique=array_unique($ages);
print_r($unique);
echo "<br>";
sort ($unique);
print_r($unique);
$remove=array_pop($unique);
print_r($remove);
array_push()
?>