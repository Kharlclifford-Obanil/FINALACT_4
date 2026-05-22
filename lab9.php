<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Enter Purchase Amount:
    <input type="number" name="amount">

    <input type="submit" value="Calculate">

</form>

<?php

if(isset($_POST['amount'])){

    $amount = $_POST['amount'];

    if($amount >= 1000){

        $discount = $amount * 0.20;
        $total = $amount - $discount;

        echo "20% Discount<br>";
        echo "Total Amount: " . $total;

    }
    elseif($amount >= 500){

        $discount = $amount * 0.10;
        $total = $amount - $discount;

        echo "10% Discount<br>";
        echo "Total Amount: " . $total;

    }
    else{

        echo "No Discount<br>";
        echo "Total Amount: " . $amount;

    }

}

?>
</body>
</html>
