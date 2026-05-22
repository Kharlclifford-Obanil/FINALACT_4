<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Enter grade:
    <input type="number" name="grade">
    <input type="submit" value="Check">
</form>

<?php

if(isset($_POST['grade'])){

    $grade = $_POST['grade'];

    if($grade >= 90 && $grade <= 100){
        echo "Excellent";
    }
    elseif($grade >= 80){
        echo "Good";
    }
    elseif($grade >= 70){
        echo "Average";
    }
    else{
        echo "Failed";
    }

}

?>

</body>
</html>

