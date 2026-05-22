<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Number 1:
    <input type="number" name="num1"><br><br>

    Number 2:
    <input type="number" name="num2"><br><br>

    Operator (+ - * /):
    <input type="text" name="op"><br><br>

    <input type="submit" value="Calculate">

</form>

<?php

if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    switch($op){

        case "+":
            echo $num1 + $num2;
            break;

        case "-":
            echo $num1 - $num2;
            break;

        case "*":
            echo $num1 * $num2;
            break;

        case "/":
            if($num2 != 0){
                echo $num1 / $num2;
            } else {
                echo "Cannot divide by zero";
            }
            break;

        default:
            echo "Invalid operator";
    }

}

?>
</body>
</html>
