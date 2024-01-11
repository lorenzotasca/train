<?php

    session_start();

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

            $stmt = $connessione->prepare("INSERT INTO Giocatore (nome, username, passwordCode) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $username, $password);

            $stmt->execute();

            header("Location: Login.php");
        }   
        catch(Exception $e){
            $err = $e->getMessage();

            //redirect su Registra.php
            header("Location: Registra.php?err=$err");   

        }
        
        $stmt->close();
        $connessione->close();
    }
    
?>