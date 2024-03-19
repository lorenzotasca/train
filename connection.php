<?php

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

?>