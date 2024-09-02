<?php

$points = 0;

while (true) {
    $roll = rand(1, 6);
    
    if ($roll == 6) {
        echo "Game over! You rolled a 6.\n";
        break;
    }
    
    if ($roll % 2 != 0) {
        $points += $roll;
        echo "You rolled an odd number ($roll) and gained $roll points.\n";
    }
}

echo "Final score: $points\n";

?>