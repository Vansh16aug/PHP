<?php  
   function  change_name($nm) {
      echo "Initially the name is $nm \n";
      $nm = $nm."_new";
      echo "This function changes the name to $nm \n";
   }

   $name = "John";
   echo "My name is $name \n";
   change_name($name);
   echo "My name is still $name";

   function addition(&$val) 
   {
       $val += 10;
   }
   
   $number = 5;
   addition($number);
   echo $number;
   echo "<br>";

   
   function say()  //dynamic fxn call
{
print "hello<br>";
}
$function_holder = "say"; //assign fxn name to the variable
$function_holder();


?>
