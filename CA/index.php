<?php
    $s1=100;
    $s2=70;
    $s3=50;
    $s4=80;
    $s5=100;
    $totalSum = $s1+$s2+$s3+$s4+$s5;
    $percentage = ($totalSum/500)*100;
    echo "Total Marks: ".$totalSum."<br>";
    echo "Percentage: ".$percentage."<br>";
    if($percentage>=90){
        echo "You have scored Grade A";
    }
    else if($percentage>=80 && $percentage<90){
        echo "You have scored Grade B";
    }
    else if($percentage>=60 && $percentage<80){
        echo "You have scored Grade C";
    }
    else if($percentage>=33 && $percentage<60){
        echo "You have scored Grade D";
    }
    else{
        echo "You have scored Grade F";
    }
?>