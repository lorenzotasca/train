<?php
//avvia sessione
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: Login.php");
    }
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h1>Benvenuto <?php echo $name; ?></h1>
        <a href="Logout.php">Logout</a>
    </body>

</html>