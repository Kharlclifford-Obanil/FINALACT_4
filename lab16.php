<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Enter color:
    <input type="text" name="color">

    <input type="submit" value="Check">

</form>

<?php

if(isset($_POST['color'])){

    $color = strtolower($_POST['color']);

    switch($color){
        case "red":
            echo "Stop";
            break;

        case "yellow":
            echo "Slow down";
            break;

        case "green":
            echo "Go";
            break;

        default:
            echo "Invalid color";
    }

}

?>
</body>
</html>
