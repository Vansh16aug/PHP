<!-- <?php
$x=5;  //global scope
function myfxn(){
    global $x;
    echo "Variable x inside function is ". $x; //will give error   
    echo"<br>";
}
myfxn();
echo "Variable x outside fxn is". $x; // will print the value of variable 
?> -->
<?php  
	$lang = "PHP"; 
    function mytest()  
    {  
        global $lang = "Java";
        echo $lang;  
		echo "<br>";
    }  
    mytest();    
    echo $lang;  
?> 
