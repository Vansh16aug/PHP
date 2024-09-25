<?php
// $cars=["zen","maruti","fiat"];
// $reverse=array_reverse($cars);
// print_r($reverse);
// echo "Reverse without fxn";
// for ($i=sizeof($cars)-1;$i>=0;$i--){
//     echo $cars[$i];
//     echo "<br>";
// }
$ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34];
$unique=array_unique($ages);
print_r($unique);
$sort=sort($unique);
print_r($sort);
echo"The max element is".max($unique);
echo "The min element is".min($unique);
?>