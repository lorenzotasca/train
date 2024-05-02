<?php

    session_start();
    
    include "connection/connection.php";


    
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        
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

        $stmt = $connessione->prepare("INSERT INTO Statistica (code, type, quanto) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $code, $_POST["shoot-type"], $quanto);


        $query = "INSERT INTO registra (data) VALUES (?)"; // METTI ANCHE LE CHIAVI ESTERNE E METTERE QUI UPDATE(NO INSERT, PERCHè L'INSERT IN QUESTA TABELLA, LO FARò IN REGISTRACONTROLLER.PHP)
        $stmt2 = $connessione->prepare($query);
        $stmt2->bind_param("s", $data);


    }else {
        echo "error bitch!";
    }
    

    try {
        $stmt->execute();
        $stmt2->execute();
        header("Location: Statistics.php");
    } catch (Exception $e) {
        $err = $e->getMessage();
        header("Location: Statistics.php?err=$err");
    } finally {
        $stmt->close();
        $stmt2->close();
        $connessione->close();
    }

?>