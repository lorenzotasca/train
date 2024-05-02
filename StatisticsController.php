<?php

    session_start();
    
    include "connection/connection.php";

    
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        
        // IF PER VEDERE SE USARE INSERT INTO O UPDATE

        $stmt = $connessione->prepare("INSERT INTO Statistica () VALUES ()");

        $stmt->bind_param("", );


    }else {
        echo "error bitch!";
    }

    
    $query = "INSERT INTO Scheda (dedizione) VALUES (?)";
    $stmt2 = $connessione->prepare($query);
    $stmt2->bind_param("s", $_POST['dedication']);

    $_SESSION['dedication'] = $row['dedizione'];
    

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