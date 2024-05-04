<?php

    session_start();
 
    include "connection/connection.php";

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
                $_SESSION['id_giocatore'] = $row['ID_giocatore']; // mi serve in ProfileContrller.php
                $_SESSION['name'] = $row['nome']; // mi serve in ProfileContrller.php
                
                $_SESSION['username'] = $row['username'];
                


                // Ottieni id statistica
                $query2 = $connessione->prepare("SELECT * FROM Statistica WHERE ID_statistica = ?");
                $query2->bind_param("s", LAST_INSERT_ID()); // ------- RIVEDI ---------
                $query2->execute();
                $res2 = $query2->get_result();
                $_SESSION['id_statistica'] = $row['ID_statistica'];



                // vai diretto in profile se ruolo è già inserito in db
                $query = $connessione->prepare("SELECT ruolo FROM Giocatore WHERE ID_giocatore = ?");
                $query->bind_param("s", $_SESSION['id_giocatore']);
                $query->execute();
                $res = $query->get_result();

                $row = $res->fetch_assoc(); // Ottiene la riga risultante come array associativo

                // RIVEDI, PERCHè SEMBRA NON FUNZIONARE PIù
                if ($row['ruolo'] != NULL) {
                    $_SESSION['role'] = $row['role'];
                    header("Location: Profile.php");
                }
                else{
                    header("Location: Characteristics.php");
                }

                $query2->close();
                $query->close();


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