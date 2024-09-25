<!DOCTYPE html>
<html>
<body>

<a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>
<?php
// Use $_GET to access the parameters from the URL
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
</body>
</html>