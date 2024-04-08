<?php
include "connection/connection.php";
if(isset($_REQUEST['tabella'])){
    $tabella = $_REQUEST['tabella'];
    
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        // Controllo se la tabella è Giocatore
        if ($tabella == "Giocatore") {
            // Modifico la query per considerare l'ID_giocatore
            $query = "SELECT * FROM $tabella WHERE ID_giocatore = ?";
            $stmt = $connessione->prepare($query);
            $stmt->bind_param("i", $id);
        } else {
            // Se la tabella non è Giocatore, eseguo una query generica
            $query = "SELECT * FROM $tabella WHERE id = ?";
            $stmt = $connessione->prepare($query);
            $stmt->bind_param("i", $id);
        }
        
    } else {
        // Se l'ID non è specificato, eseguo una query generica
        $query = "SELECT * FROM $tabella";
        $stmt = $connessione->prepare($query);
    }
    $stmt->execute();
    $risultato = $stmt->get_result();
    if ($risultato) {
        header('Content-Type: application/json');
        echo json_encode($risultato->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);    
    } else {
        echo "Errore nella query: " . $connessione->error;
    }
} else {
echo("
<!DOCTYPE html>
<html>
    <head>
        <title>Api</title>
    </head>
    <body>
        <div>
            <h1>Api</h1>
        <hr>
        <div style='padding-left: 20px; padding-top:10px;'>
            <h2><a href='/www/api/Giocatore'>Giocatore</a></h2>
        </div>
    </body>
</html>");
}
?>
