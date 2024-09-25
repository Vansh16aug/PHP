<?php

// Define a global variable $counter
$counter = 0;

function incrementCounter() {
    // Access and modify the global variable using the GLOBALS array
    $GLOBALS['counter']++;
    echo "Counter after increment: " . $GLOBALS['counter'] . "\n";
}

function decrementCounter() {
    // Access and modify the global variable using the GLOBALS array
    $GLOBALS['counter']--;
    echo "Counter after decrement: " . $GLOBALS['counter'] . "\n";
}

function resetCounter() {
    // Access and modify the global variable using the GLOBALS array
    $GLOBALS['counter'] = 0;
    echo "Counter after reset: " . $GLOBALS['counter'] . "\n";
}

// Function calls
incrementCounter();  // Output: Counter after increment: 1
decrementCounter();  // Output: Counter after decrement: 0
incrementCounter();  // Output: Counter after increment: 1
incrementCounter();  // Output: Counter after increment: 2
resetCounter();      // Output: Counter after reset: 0

?>
