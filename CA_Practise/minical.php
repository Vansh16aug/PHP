<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1=$_POST['firstnum'];
    $num2=$_POST['secondnum'];
    $operation=$_POST['operation'];

    switch($operation){
        case'+':
            $add=$num1+$num2;
            echo"<h4> The addition of two no.s is $add </h4>";
         break;
         
         case'-':
            $sub=$num1-$num2;
            echo"<h4> The subtraction of two no.s is $sub </h4>";
         break;
         case'*':
            $mul=$num1*$num2;
            echo"<h4> The subtraction of two no.s is $mul </h4>";
         break;
         case'/':
            $div=$num1/$num2;
            echo"<h4> The subtraction of two no.s is $div </h4>";
         break;
    }
}

?>