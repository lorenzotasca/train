<?php

    session_start();

    include "connection.php";

    function cm_to_ft($cm) {
        // 1 piede = 30.48 cm
        $feet = $cm / 30.48;
        // Arrotonda il risultato alla seconda cifra decimale
        $feet_rounded = round($feet, 2);
        return $feet_rounded;
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

        try {
            $stmt->execute();
            header("Location: DefaultPage.php");
        } catch (Exception $e) {
            $err = $e->getMessage();
            header("Location: Characteristics.php?err=$err");
        } finally {
            $stmt->close();
            $connessione->close();
        }

    }else {
        echo "error bitch!";
    }

    

?>