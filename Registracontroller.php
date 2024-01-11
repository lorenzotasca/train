<?php
    // Get the form data
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash the password
    
    $id_giocatore = $surname . $name . $birthdate;
    
    /*
    // Database connection parameters
    $servername = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'progetto';

    // Create a new mysqli object
    $connessione = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    */

    $connessione = new mysqli('localhost', 'root', '', 'progetto');

    // Check the connection
    if ($connessione->connect_error) {
        die('Connessione fallita: ' . $connessione->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $connessione->prepare("INSERT INTO Giocatore (ID_giocatore, cognome, nome, data_nascita, username, passwordCode) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("ssssss", $id_giocatore, $surname, $name, $birthdate, $username, $password);

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