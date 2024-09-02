<?php 
    $m1 = 50;
    $m2 = 60;
    $m3 = 70;
    $m4 = 80;
    $m5 = 90;

    $totalMarks = $m1 + $m2 + $m3 + $m4 + $m5;
    $totalSubjects = 5;
    $percentage = ($totalMarks / ($totalSubjects * 100)) * 100;

    switch ($percentage) {
        case $percentage >= 35 && $percentage < 50:
            echo "Grade-D";
            break;
        case $percentage >= 50 && $percentage < 60:
            echo "Grade-C";
            break;
        case $percentage >= 60 && $percentage < 70:
            echo "Grade-B";
            break;
        case $percentage >= 70 && $percentage < 80:
            echo "Grade-A";
            break;
        case $percentage >= 80 && $percentage < 90:
            echo "Grade-A+";
            break;
        
        default:
            echo "Grade-F";
            break;
    }

?> 