<?php
    session_start();
    $_SESSION['id_giocatore'] = null;
    $_SESSION['name'] = null;

    session_destroy();
    
    header("Location: Login.php");
    
?>