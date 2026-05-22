<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Enter Password:
    <input type="password" name="password">

    <input type="submit" value="Login">

</form>

<?php

if(isset($_POST['password'])){

    $correctPassword = "admin123";
    $userPassword = $_POST['password'];

    if($userPassword == $correctPassword){
        echo "Access Granted";
    }
    else{
        echo "Access Denied";
    }

}

?>
</body>
</html>
