<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Enter a number:
    <input type="number" name="number">
    <input type="submit" value="Check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST['number'];

    if ($number % 2 == 0) {
        echo "The number is Even";
    } else {
        echo "The number is Odd";
    }

}

?>

</body>
</html>