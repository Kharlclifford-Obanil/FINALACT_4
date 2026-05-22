<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Enter Year:
    <input type="number" name="year">

    <input type="submit" value="Check">

</form>

<?php

if(isset($_POST['year'])){

    $year = $_POST['year'];

    if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)){
        echo "Leap Year";
    }
    else{
        echo "Not a Leap Year";
    }

}

?>
</body>
</html>
