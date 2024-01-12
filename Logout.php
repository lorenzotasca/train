<?php
    session_start();
    $_SESSION['ID_giocatore'] = null;
    $_SESSION['nome'] = null;

    session_destroy();
    
    header("Location: Login.php");
    
?>