<?php
function makecoffee($type = "cappuccino") //passing parameter
{
    return "Making a cup of $type.<br>";
}
echo makecoffee();  //take default value
echo makecoffee(null);
echo makecoffee("espresso");
?>

<!-- <?php
function setchildren(int $children = 8) {
  echo "Total number of children are : $children <br>";
}

setchildren(2);
setchildren(1);
setchildren();
setchildren(3);
?> -->
