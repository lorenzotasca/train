<?php

    session_start();
 
    include "connection.php";

    // Check if form is submitted
    if(isset($_POST['login'])){ // questo login è il name del bottone ed è nel Login.php
        // Sanitize user input to prevent SQL injection
        $username = $connessione->real_escape_string($_POST['username']);
        $password = $connessione->real_escape_string($_POST['password']); // Hash the password
        //$password = md5($_POST['password']); // Hash the password

        // Use prepared statements to prevent SQL injection
        $stmt = $connessione->prepare("SELECT * FROM Giocatore WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            //if(password_verify($password, $row['passwordCode'])){
            if(md5($password) == $row['passwordCode']){
                // Password matches, so create the session
                $_SESSION['id'] = $row['ID_giocatore']; // mi serve in ProfileContrller.php
                $_SESSION['name'] = $row['nome']; // mi serve in ProfileContrller.php
                //$_SESSION['surname'] = $row['cognome']; // mi serve in ProfileContrller.php
                //$_SESSION['birthdate'] = $row['data_nascita']; // mi serve in ProfileContrller.php
                $_SESSION['username'] = $row['username'];
                
                
                
                header("Location: Characteristics.php");

                exit(); // Interrompere l'esecuzione dopo il redirect
            }else {
                $_SESSION['error'] = "Incorrect username or password.";
                header("Location: login.php"); // Redirect back to login page
                exit();
            }
        }else {
            echo "Incorrect username or password.";
        }

        $stmt->close();
    }

    $connessione->close();
    
?>