<?php
    session_start();
    $_SESSION['id'] = null;
    $_SESSION['name'] = null;

    session_destroy();
    
    header("Location: Login.php");
    mysqli_close($connection);
?>