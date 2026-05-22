<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Enter Age:
    <input type="number" name="age"><br><br>

    Enter Citizenship:
    <input type="text" name="citizen"><br><br>

    <input type="submit" value="Check">

</form>

<?php

if(isset($_POST['age']) && isset($_POST['citizen'])){

    $age = $_POST['age'];
    $citizen = $_POST['citizen'];

    if($age >= 18){

        if($citizen == "Filipino"){
            echo "Eligible to vote";
        }
        else{
            echo "Not eligible to vote";
        }

    }
    else{
        echo "Not eligible to vote";
    }

}

?>
</body>
</html>
