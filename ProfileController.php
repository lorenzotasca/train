<?php

    session_start();

    include "connection.php";
    echo "stupid";
    //echo $_SESSION['id'];
    // convert cm into ft
    function cm_to_ft($cm) {
        // 1 feet = 30.48 cm
        return $cm / 30.48;
    }
    
    $standing_reach_ft = cm_to_ft($_POST['standing_reach_cm']);
    $height_wo_shoes_ft = cm_to_ft($_POST['height_wo_shoes_cm']);
    $wingspan_ft = cm_to_ft($_POST['wingspan_cm']);


    // Controlla se $id_giocatore è memorizzato nella sessione
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        
        $id_giocatore = $_SESSION['id'];
        //$surname = $_SESSION['surname'];
        //$name = $_SESSION['name'];
        //$birthdate = $_SESSION['birthdate'];
       
        // Prepare the SQL statement
        $stmt = $connessione->prepare("INSERT INTO Giocatore (ID_giocatore, ruolo, standing_reach, altezza_senza_scarpe, apertura_alare) VALUES (?, ?, ?, ?, ?)");

        // Bind the parameters      // quelli con la sessione servono perchè sono campi obbligatori nel db
        $stmt->bind_param("sssss", $id_giocatore, $_POST['role'], $standing_reach_ft, $height_wo_shoes_ft, $wingspan_ft);

        // Try to execute the statement and handle any errors
        try {
            $stmt->execute();
            header("Location: DefaultPage.php");
        } catch (Exception $e) {
            $err = $e->getMessage();
            header("Location: Profile.php?err=$err");
        } finally {
            // Always close the statement and connection, even if an error occurred
            $stmt->close();
            $connessione->close();
        }

    }else {
        echo "error bitch!";
    }

    

?>