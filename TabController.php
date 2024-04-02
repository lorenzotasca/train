<?php
function getTabColors($dedication) {
    // Definisci qui la logica per determinare i colori e le percentuali in base al livello di dedizione
    // Ad esempio:
    $colors = array(
        "Basket" => array("color" => "#ff9999", "percentage" => 30),
        "Gym" => array("color" => "#99ccff", "percentage" => 20),
        "Personal_growth" => array("color" => "#99ff99", "percentage" => 15),
        "Sleep" => array("color" => "#ffff99", "percentage" => 25),
        "Other" => array("color" => "#ffcc99", "percentage" => 10)
    );

    // Modifica le percentuali in base al livello di dedizione
    foreach ($colors as $activity => $data) {
        $colors[$activity]['percentage'] += $dedication * 5;
    }

    return $colors;
}
?>



<?php
    // QUESTA PARTE SAREBBE DA AGGIUNGERE IN Tab.php 

    session_start();

    include 'TabController.php'; // Includi il file TabController.php

    // Ottenere il livello di dedizione dalla sessione
    $dedication = isset($_SESSION['dedication']) ? $_SESSION['dedication'] : 1;

    // Ottenere i colori e le percentuali dalla funzione getTabColors
    $colors = getTabColors($dedication);

    // Continua il codice per la creazione della tabella utilizzando i dati restituiti
    // ...
?>