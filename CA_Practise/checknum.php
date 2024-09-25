<?php
$x=5;
if(is_int($x)){
    echo $x."is an integer";
    ECHO "<BR>";
}
echo "The size of the integer x is". PHP_INT_SIZE;//On most 64-bit systems, PHP_INT_SIZE will return 8, meaning that an integer is 8 bytes 
?>