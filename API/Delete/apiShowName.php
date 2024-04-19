<?php

    include "../../connection/connection.php";


    if(isset($_GET["t"])) {
        $param = $_GET["t"];

        $sql = "SELECT * FROM Giocatore WHERE nome LIKE '%$param%'";

        $result = $connessione->query($sql);

        // Controlla se ci sono risultati
        if($result) {
            // Ottieni tutti i risultati della query
            $res = $result->fetch_all();

            foreach ($res as $r) {
                echo '<input type="submit" class="delete-button" data-id="' . $r[0] . '" value="Delete"/>' . " ";
                echo $r[2] . " " . $r[1] . "<br>";
            }
        } else {
            echo "Error executing query: " . $connessione->error;
        }
    } else {
        echo "Error: Missing parameter 't'";
    }


?>