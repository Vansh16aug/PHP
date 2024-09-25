<!-- Simulate a simple game loop where the player rolls a die. The game ends if the player rolls a 6. If they roll an odd number, they gain points, and the loop continues until a 6 is rolled. -->
<?php
$score = 0;
while (true) {  //statement starts an infinite loop. This loop will keep running until it encounters a break statement, which will stop the loop.
    $roll = rand(1, 6); // Simulate rolling a die
    echo "You rolled: $roll" . "<br>";
    
    if ($roll === 6) {
        echo "Game over! Final score: $score" . PHP_EOL;
        break; // Exit the loop
    }
    
    elseif ($roll % 2 !== 0) {
        $score += 10; // Gain 10 points for an odd roll
        echo "Odd roll! Current score: $score" . PHP_EOL;
    } else {
        echo "Even roll! No points gained." . PHP_EOL;
        continue; // Skip to the next iteration The continue statement is used to skip the rest of the current loop iteration and move directly to the next roll.
    }
}
?>

