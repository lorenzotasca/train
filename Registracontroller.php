<?php

    var_dump($_POST);
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);

    $connessione = new mysqli('localhost', 'root', '', 'progetto');

    if ($connessione->connect_errno) {
        echo('Connessione fallita: ' . $connessione->connect_error);
        exit();
    }else{
        try{

            $registra = "insert into Giocatore (nome, username, passwordCode) values ('$name', '$username', '$password')";
            $connessione->query($registra);
            header("Location: Login.php");  
        }   
        catch(Exception $e){
            $err = $e->getMessage();

            //redirect su Registra.php
            header("Location: Registra.php?err=$err");   

        }
        
        
    }
    $connessione->close();
?>