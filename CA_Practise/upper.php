<?php
function checkPalindrome($string) {
    // Convert string to lowercase
    $lowercaseString = strtolower($string);

    // Convert string to uppercase
    $uppercaseString = strtoupper($string);

    // Check if the lowercase string is a palindrome
    $reversedString = strrev($lowercaseString);
    $isPalindrome = ($lowercaseString === $reversedString);

    // Output the results
    echo "Original String: $string\n";
    echo "Lowercase: $lowercaseString\n";
    echo "Uppercase: $uppercaseString\n";

    if ($isPalindrome) {
        echo "The string is a palindrome.\n";
    } else {
        echo "The string is not a palindrome.\n";
    }
}

// Example usage
checkPalindrome("Madam");
?>
