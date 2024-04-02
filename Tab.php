<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming</title>
    <style>
        table {
            width: 94%;
            border-collapse: collapse;
            float: left;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        .legend {
            margin-top: 20px;
            float: left;
            margin-right: 20px;
        }

        .legend span {
            display: block;
            margin-bottom: 10px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .Basket {
            background-color: #ff9999;
        }

        .Gym {
            background-color: #99ccff;
        }

        .Personal_growth {
            background-color: #99ff99;
        }

        .Sleep {
            background-color: #ffff99;
        }

        .Other {
            background-color: #ffcc99;
        }

    </style>
</head>
<body>
    <div class="legend">
        <strong>Legend</strong><br><br><br>
        <span class="Basket"></span> Basket<br><br>
        <span class="Gym"></span> Gym<br><br>
        <span class="Personal_growth"></span> Personal<br>growth<br><br>
        <span class="Sleep"></span> Sleep<br><br>
        <span class="Other"></span> Other
    </div>

    <?php

        session_start();

        // PER OGNI GIORNO DELLA SETTIMANA, FARE UNA NUOVA PAGINA DOVE SI VEDA CHIARAMENTE LA DESCRIZIONE DEGLI ALLENAMENTI E 
        // LE STESSE INFORMAZIONI DIViSE SEMPRE PER COLORE DI OGNI ATTIVITA' AD OGNI ORARIO
        // (SE STESSA COSA RIPETUTA SU PIU' ORARI CONSECUTIVI, RAGGRUPPARE IN UNA CELLA SOLA (CON COLSPAN = NUMERO DI ORARI CONSECUTIVI IDENTICI))


        $orari_settimanali = array(
            "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
        );
        $orari = range(0, 23);

        echo "<table>";
        echo "<tr><th></th>";
        foreach ($orari_settimanali as $giorno) {
            echo "<th><a href='Train.php'>$giorno</a></th>";
        }
        echo "</tr>";

        // METTI I MEZZI ORARI


        // IN CAHRACTERISTICS METTI ANCHE UN LIVELLO DI DEDIZIONE ALL'ALLENAMENTO (DA 1 A 5) 
        // E IN BASE A QUEL LIVELLO, PIù è ELEVATO, PIù AUMENTA LA DIFFICOLTà E NUMERO DI ALLENAMENTI GIORNALIERI
        // (1 = UP TO 1 ALLENAMENTO GIORNALIERO, 2 = UP TO 2 ALLENAMENTI GIORNALIERI, 3 = UP TO 3 ALLENAMENTI GIORNALIERI E COSì VIA)
        // E IN BASE A QUEL LIVELLO, PIù è ELEVATO, PIù AUMENTA IL NUMERO DI GIORNI DI ALLENAMENTO SETTIMANALI
        // (1 = 3 GIORNI DI ALLENAMENTO SETTIMANALI, 2 = 4 GIORNI DI ALLENAMENTO SETTIMANALI, 3 = 5 GIORNI DI ALLENAMENTO SETTIMANALI E COSì VIA FINO A 7 GIORNI DI ALLENAMENTO SETTIMANALI)
        

        foreach ($orari as $ora) {
            $ora_display = sprintf("%02d:00", $ora);
            echo "<tr><td>$ora_display</td>";
            foreach ($orari_settimanali as $giorno) {
                echo "<td class='";

                // SE SI PUò FAI UNA PAGINA A PARTE PER LA LOGICA DELLA SUDDIVISIONE IN COLORI, MA NON CON TANTI IF:
                // DEVE CONTENERE LE PERCENTUALI, LA SUDDIVISIONE DELLA GIORNATA IN MATTINA, POMERIGGIO, SERA E NOTTE (SOLO LATO CODICE), E MOLTO ALTRO;
                // IN QUESTO MODO, PASSANDO COME PARAMETRO IL LIVELLO DI DEDIZIONE ($dedication), IN AUTOMATICO CREA LUI LA TABELLA CON I COLORI 
                // (IN TABCONTROLLER C'è UN PARTE/ESEMPIO DI COME POTREBBE ESSERE)
                if ($_SESSION['dedication'] == 1) {
                    $dedication = 1;
                } elseif ($_SESSION['dedication'] == 2) {
                    $dedication = 2;
                } elseif ($_SESSION['dedication'] == 3) {
                    $dedication = 3;
                } elseif ($_SESSION['dedication'] == 4) {
                    $dedication = 4;
                } elseif ($_SESSION['dedication'] == 5) {
                    $dedication = 5;
                }


                /*if (($ora >= 0 && $ora <= 6) || $ora == 23) {
                    echo "Sleep";
                } elseif ($ora == 7) {
                    echo "Other";
                } elseif ($ora >= 11 && $ora <= 18) {
                    echo "Basket";
                } elseif ($ora >= 19 && $ora <= 22) {
                    echo "Personal_growth";
                }*/
                echo "'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>