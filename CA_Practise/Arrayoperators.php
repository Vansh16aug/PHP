<?php
$a = array("INT219" => "Front End Web", "INT220" => "PHP", "INT221" => "Laravel");
$b = array("INT222" => "Node js", "CSE316" => "Operating System");
$c = ($a + $b); // Union of $x and $y
var_dump($c);
echo "<br>";
var_dump($a == $b);   // Outputs: boolean false
echo "<br>";
var_dump($a === $b);  // Outputs: boolean false
echo "<br>";
var_dump($a != $b);   // Outputs: boolean true
echo "<br>";
var_dump($a <> $b);   // Outputs: boolean true
echo "<br>";
var_dump($a !== $b);  // Outputs: boolean true
?>
