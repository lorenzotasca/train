<?php

    session_start();

    // Database configuration
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'progetto';

    // Create a new MySQLi connection
    $connessione = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($connessione->connect_error) {
        die("Connection failed: " . $connessione->connect_error);
    }

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
                $_SESSION['id'] = $row['ID_giocatore'];
                $_SESSION['name'] = $row['nome']; // to get the name for Profile.php
                $_SESSION['username'] = $row['username'];
                // Redirect to profile page
                header("Location: Profile.php");
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