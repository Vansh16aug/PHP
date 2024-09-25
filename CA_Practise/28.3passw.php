<!-- PHP Password Validation Check for Strength -->
<?php
function checkPasswordStrength($password) {
    // Check if the password has at least 8 characters
    if (strlen($password) < 8) {
        return "Weak: Password must be at least 8 characters long.";
    }

    // Check if the password contains both uppercase and lowercase letters
    if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        return "Weak: Password must contain both uppercase and lowercase letters.";
    }

    // Check if the password includes at least one numeric digit
    if (!preg_match('/\d/', $password)) {
        return "Weak: Password must include at least one numeric digit.";
    }

    // Check if the password contains at least one special character
    if (!preg_match('/[\W_]/', $password)) {
        return "Weak: Password must contain at least one special character (e.g., !@#$%).";
    }

    // If all conditions are met, the password is strong
    return "Strong: Your password meets all the criteria.";
}

// Test the function
$password = "Passw0rd!";
echo checkPasswordStrength($password); // 
?>
