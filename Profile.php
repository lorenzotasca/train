<?php
//avvia sessione
    session_start();
    if(!isset($_SESSION['ID_giocatore'])){
        header("Location: Login.php");
    }
    $id = $_SESSION['ID_giocatore'];
    $name = $_SESSION['nome'];

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