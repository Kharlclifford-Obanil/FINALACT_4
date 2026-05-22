<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Select option:
    <select name="menu">
        <option value="1">Add</option>
        <option value="2">Edit</option>
        <option value="3">Delete</option>
    </select>

    <input type="submit" value="Submit">

</form>

<?php

if(isset($_POST['menu'])){

    $menu = $_POST['menu'];

    switch($menu){
        case 1: echo "Add selected"; break;
        case 2: echo "Edit selected"; break;
        case 3: echo "Delete selected"; break;
        default: echo "Invalid option";
    }

}

?>
</body>
</html>
