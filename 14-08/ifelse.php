<?php 
    $a = 10;
    if (is_int($a)) {
        if($a > 0) {
            echo "This is a positive integer. $a";
        }
        else {
            echo "This is a negative integer.";
        }
    }
    else {
        echo "This is not an integer.";
    }
?>