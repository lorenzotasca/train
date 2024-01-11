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
    if(isset($_POST['submit'])){ // questo submit è il name del bottone ed è nel Login.php
        // Sanitize user input to prevent SQL injection
        $username = $connessione->real_escape_string($_POST['username']);
        $password = $connessione->real_escape_string($_POST['password']);

        // Use prepared statements to prevent SQL injection
        $stmt = $connessione->prepare("SELECT * FROM Giocatore WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
                // Password matches, so create the session
                $_SESSION['id'] = $row['ID_giocatore'];
                $_SESSION['username'] = $row['username'];
                // Redirect to profile page
                header("Location: Profile.php");
                exit(); // Importante per interrompere l'esecuzione dopo il redirect
            } else {
                echo "Incorrect username or password.";
            }
        } else {
            echo "Incorrect username or password.";
        }

        $stmt->close();
    }

    $connessione->close();
    /*
    // Start the session
    session_start();

    
    // Database configuration
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'progetto';

    // Create a new MySQLi connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    

    $conn = new mysqli('localhost', 'root', '', 'progetto');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form is submitted
    if(isset($_POST['submit'])){
        // Sanitize user input to prevent SQL injection
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query the database for username and password
        $result = mysqli_query($conn, "SELECT * FROM Giocatore WHERE username = '$username'");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                // Password matches, so create the session
                $_SESSION['id'] = $row['ID_giocatore'];
                $_SESSION['username'] = $row['username'];
                // Redirect to profile page
                header("Location: Profile.php");
            }else{
                echo "Incorrect username or password.";
            }
        }else{
            echo "Incorrect username or password.";
        }
    }
    */
?>