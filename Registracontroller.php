<?php
    // Get the form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash the password

    // Database connection parameters
    $servername = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'progetto';

    // Create a new mysqli object
    $connessione = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if ($connessione->connect_error) {
        die('Connessione fallita: ' . $connessione->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $connessione->prepare("INSERT INTO Giocatore (nome, username, passwordCode) VALUES (?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sss", $name, $username, $password);

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
    
    /*
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
    */
    
?>