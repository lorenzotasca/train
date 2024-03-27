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
        
        <style>

            a {
                display: block;
                margin-top: 20px;
                color: #007bff;
                text-decoration: none;
                text-decoration: underline;
            }

        </style>
    </head>

    <body>
        <h1>Welcome, <?php echo $name; ?>!</h1>
        <a href="Logout.php">Logout</a>
    </body>

</html>