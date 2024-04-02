<?php

    session_start();

    include "connection.php";

    function cm_to_ft($cm) {
        // Controlla se il valore è già un float
        if (!is_float($cm)) {
            // Se non è un float, convertilo
            $cm = (float) $cm;
        }
        
        // 1 piede = 30.48 cm
        $feet = $cm / 30.48;

        // Utilizza number_format per formattare il risultato con due decimali
        $feet_formatted = number_format($feet, 2);
        
        return $feet_formatted;
    }
    //echo $feet_rounded;
    
    $standing_reach_ft = cm_to_ft($_POST['standing_reach_cm']);
    $height_wo_shoes_ft = cm_to_ft($_POST['height_wo_shoes_cm']);
    $wingspan_ft = cm_to_ft($_POST['wingspan_cm']);


    // Controlla se $id_giocatore è memorizzato nella sessione
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        
        $id_giocatore = $_SESSION['id'];

        $stmt = $connessione->prepare("UPDATE Giocatore SET ruolo=?, standing_reach=?, altezza_senza_scarpe=?, apertura_alare=? WHERE ID_giocatore=?");

        $stmt->bind_param("sssss", $_POST['role'], $standing_reach_ft, $height_wo_shoes_ft, $wingspan_ft, $id_giocatore);


    }else {
        echo "error bitch!";
    }

    // to insert in scheda the number of dedication

    //echo $_POST['dedication']; // solo il numero
    
    $query = "INSERT INTO Scheda (dedizione) VALUES (?)";
    $stmt2 = $connessione->prepare($query);
    $stmt2->bind_param("s", $_POST['dedication']);
    

    try {
        $stmt->execute();
        $stmt2->execute();
        header("Location: Profile.php"); // vai in DefaultPage.php per poi avere in alto a destra un "menu a tendina" che ti dici molte cose tra cui: "my activities"
    } catch (Exception $e) {
        $err = $e->getMessage();
        header("Location: Characteristics.php?err=$err");
    } finally {
        $stmt->close();
        $stmt2->close();
        $connessione->close();
    }

    

?>