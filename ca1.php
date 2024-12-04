<?php
$n = 7;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $value = max(max($i, $j), max($n - 1 - $i, $n - 1 - $j)) + 1;
            echo $value . " ";
        }
        echo "<br>";
    }
?>
