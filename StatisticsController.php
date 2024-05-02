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


        $query = "INSERT INTO registra (data) VALUES (?)";
        $stmt2 = $connessione->prepare($query);
        $stmt2->bind_param("s", $data);


    }else {
        echo "error bitch!";
    }
    

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