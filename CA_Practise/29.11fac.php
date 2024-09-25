<?php
function factorial($n) {
    if (!is_int($n) || $n < 0) {
        return "Error: Input must be a non-negative integer.";
    }

    $factorial = 1;
    for ($i = $n; $i > 1; $i--) {
        $factorial *= $i;
    }

    return $factorial;
}

$modifyResult = function($result) {
    return $result * 2;
};

function displayResult($factorial, $callback) {
    if (is_numeric($factorial)) {
        $modifiedResult = $callback($factorial);
        echo "The modified factorial result is: " . $modifiedResult;
    } else {
        echo $factorial; // Display the error message if there's an error
    }
}

$number = 5; // Change this number to test different inputs
$factorialResult = factorial($number);
displayResult($factorialResult, $modifyResult);

?>
