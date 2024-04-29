<?php

    session_start();

    include "connection/connection.php";

    // Get the form data
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
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

    
    $id_giocatore = $surname . $name . $birthdate;

    // Prepare the SQL statement
    $stmt = $connessione->prepare("INSERT INTO Giocatore (ID_giocatore, cognome, nome, data_nascita, tipo, username, passwordCode) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sssssss", $id_giocatore, $surname, $name, $birthdate, $tipo, $username, $password);

    // Try to execute the statement and handle any errors
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