<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $tempincel=$_POST['temcel'];
$tempinfeh=9/5*$tempincel+32;
echo "<h4>The temp in fehrenheit is.$tempinfeh </h4>";
}

?>