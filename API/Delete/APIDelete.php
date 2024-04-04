<?php

    echo "Ciao";

    include "../../connection/connection.php";
    

    if(isset($_POST["id"])) {
        // Prende l'ID utente dalla richiesta POST
        $userId = $_POST["id"];

        // Decodifica dell'ID ricevuto dalla richiesta POST
        $decodedUserId = urldecode($userId);

        //var_dump($_POST["id"]);
        //var_dump($_POST); // Debug: stampa i dati POST per verificare la ricezione dell'ID
        //$userId = $_GET['id'];

        // Query SQL per eliminare l'utente dalla tabella 'Giocatore' con l'ID specificato
        $sql = "DELETE FROM Giocatore WHERE ID_giocatore = ?";
        $stmt = $connessione->prepare($sql);

        // Controlla se la preparazione della query è avvenuta con successo
        if($stmt) {
            // Collega l'ID utente alla query
            $stmt->bind_param("s", $userId);

            // Esegui la query
            $stmt->execute();

            // Controlla se l'eliminazione è avvenuta con successo
            if ($stmt->affected_rows > 0) {
                echo "User deleted successfully";
            } else {
                echo "Error deleting user: " . $stmt->error;
            }

            // Chiudi il prepared statement
            $stmt->close();
        } else {
            // Se c'è un errore nella preparazione della query, stampa un messaggio di errore
            echo "Error preparing statement: " . $connessione->error;
        }
    } else {
        // Se l'ID utente non è stato passato, stampa un messaggio di errore
        echo "Error: Missing user ID";
    }

    // Chiudi la connessione al database
    $connessione->close();


?>
