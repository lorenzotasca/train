<?php

    session_start();

    include "connection/connection.php";

    // Get the form data
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $taxcode = $_POST['taxcode'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash the password

    if(isset($_POST['adminSelected'])) {
        // Recupera il valore di adminSelected
        $adminSelected = $_POST['adminSelected'];
    } else {
        // Imposta il valore di default se adminSelected non è stato inviato
        $adminSelected = "false";
    }
    
    // Imposta il valore del campo "tipo" in base a adminSelected
    $tipo = ($adminSelected == "true") ? "admin" : "utente";


    $stmt = $connessione->prepare("INSERT INTO Giocatore (cod_fisc, cognome, nome, data_nascita, tipo, username, passwordCode) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $taxcode, $surname, $name, $birthdate, $tipo, $username, $password);



    try {
        $stmt->execute();
        
        header("Location: Login.php");
    } catch (Exception $e) {
        $err = $e->getMessage();
        header("Location: Registra.php?err=$err");
    } finally {
        // Always close the statement and connection, even if an error occurred
        $stmt->close();
        
        $connessione->close();
    }
    
    
    
?>