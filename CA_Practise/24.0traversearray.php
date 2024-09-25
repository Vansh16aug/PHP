<?php
$courses=["BA","BCA","BTech","MTech","MCA","MBA"];
for($i=0;$i<sizeof($courses);$i++){ //traversing indexed array
    echo $courses[$i];
    echo "<br>";
}
echo "<br>";
print_r($courses);
foreach($courses as $course){   //traversing using foreach loop
    echo $course;
    echo "<br>";
}
$courses=["BA"=>56,"BCA"=>67,"BTech"=>65,"MTech"=>80,"MCA"=>90,"MBA"=>100];
foreach ($courses as $course=>$strength){
echo "$course has $strength students";
    echo "<br>";
}
echo "<br>";
print_r($courses);
?>