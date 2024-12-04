<?php
$n = 100;
$a = 50;
$sum = 0;
for($i=$a+1;$i<=100;$i++){
    $temp = $i * $i *$i;
    $sum+=$temp;
}

echo "Sum of cubes from 51 to 100 : $sum";

?>