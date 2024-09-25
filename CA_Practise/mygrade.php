<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $m1=$_POST['firstsub'];
    $m2=$_POST['secsub'];
    $m3=$_POST['thrdsub'];
    $m4=$_POST['forthsub'];
    $tot_marks=$m1+$m2+$m3+$m4;
    $per=$tot_marks/400*100;
    echo "<h1> The percentage is </h1>" .number_format($per,2) ;
    if ($per >= 90 && $per <=100) {
      echo "Grade is O";
    } 
    elseif ($per >= 80 && $per <90) {
        echo "Grade is A+";
    } 
    elseif ($per >= 70 && $per <80) {
        echo "Grade is B";
    }
    } elseif ($per >= 60 && $per <70) {
        echo "Grade is C";
    } elseif ($per >= 50 && $per <60) {
        echo "Grade is D";
    } elseif ($per >= 40 && $per <50) {
        echo "Grade is E";
    } else {
        echo "Grade is F";
    }



?>