<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="POST">
        <label for="firstnum"> Enter 1st Number</label>
        <input type="number" id="firstnum" name="num1" required placeholder="enter the value">
        <br>
        <label for="secondnum"> Enter 1st Number</label>
        <input type="number" id="secondnum" name="num2" required placeholder="enter 2nd value">
        <br>
        <input type="submit" value="+" name="operation">
        <input type="submit" value="-" name="operation">
        <input type="submit" value="*" name="operation">
        <input type="submit" value="/" name="operation">
        <input type="submit" value="*" name="operation">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $n1=$_POST["num1"];
        $n2=$_POST["num2"];
        $oper=$_POST["operation"]
        $add=$n1+$n2;
        echo "<h1> The result of my addition is $add </h1>";
    }


    ?>
</body>
</html>