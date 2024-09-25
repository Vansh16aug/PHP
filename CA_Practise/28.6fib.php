<!-- Write a PHP script that generates the first 20 numbers of the Fibonacci sequence using a loop. -->
<?php
$n1 = 0;
$n2 = 1;
$count = 20;

echo "Fibonacci Sequence: ";
echo $n1 . " " . $n2 . " ";

for ($i = 2; $i < $count; $i++) {
    $n3 = $n1 + $n2;
    echo $n3 . " ";
    $n1 = $n2;
    $n2 = $n3;
}
?>
