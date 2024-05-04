<?php

    session_start();
    
    include "connection/connection.php";


    
    if(isset($_SESSION['id_giocatore']) && isset($_SESSION['id_statistica'])) {
        
        if(isset($_POST['submitHoops'])){
            $code = "Hoops";
            $quanto = $_POST["shoot-count"];
            $data = $_POST['submitHoops'];
        }
        elseif(isset($_POST['submitRapidity'])){
            $code = "Rapidity";
            $quanto = $_POST["rapidity-time"];
            $data = $_POST['submitRapidity'];
        }

        $stmt = $connessione->prepare("UPDATE Statistica SET code=?, type=?, quanto=?, data=? WHERE ID_statistica=?");
        $stmt->bind_param("ssss", $code, $_POST["shoot-type"], $quanto, $data, $_SESSION['id_statistica']);


    }else {
        echo "error bitch!";
    }
    

    try {
        $stmt->execute();
        header("Location: Statistics.php");
    } catch (Exception $e) {
        $err = $e->getMessage();
        header("Location: Statistics.php?err=$err");
    } finally {
        $stmt->close();
        $connessione->close();
    }

?>