<?php

$password = "dskjA@#@$@hfwiegfsdgf2313231uhshd"; 

$uppercase = preg_match('@[A-Z]@', $password);
$number = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if (!$uppercase  || !$number || !$specialChars || strlen($password) < 8) {
    echo "Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
} else {
    echo "Password is valid.";
}

?>