<?php
$result = array(
    array("Manoj",7.8,"pass"),
    array("Aditya",8.5,"pass"),
    array("Anuj",4.9,"fail")
);
echo $result[0][0]. "----CGPA is: " . $result[0][1]." and his status is ".$result[0][2]."<br>";
echo $result[1][0]. "----CGPA is: " . $result[1][1]." and his status is ".$result[1][2]."<br>";
echo $result[2][0]. "----CGPA is: "  . $result[2][1]." and his status is ".$result[2][2];
?>
