<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" value="Login">

</form>

<?php

if(isset($_POST['username']) && isset($_POST['password'])){

    $correctUsername = "admin";
    $correctPassword = "1234";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $correctUsername && $password == $correctPassword){
        echo "Login Successful";
    }
    else{
        echo "Invalid Username or Password";
    }

}

?>
</body>
</html>
