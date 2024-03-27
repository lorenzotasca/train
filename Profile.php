<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: Login.php");
        exit();
    }
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        
        
    </head>

</html>