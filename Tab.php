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

        foreach ($orari as $ora) {
            $ora_display = sprintf("%02d:00", $ora);
            echo "<tr><td>$ora_display</td>";
            foreach ($orari_settimanali as $giorno) {
                echo "<td class='";
                if (($ora >= 0 && $ora <= 6) || $ora == 23) {
                    echo "Sleep";
                } elseif ($ora == 7) {
                    echo "Other";
                } elseif ($ora >= 11 && $ora <= 18) {
                    echo "Basket";
                } elseif ($ora >= 19 && $ora <= 22) {
                    echo "Personal_growth";
                }
                echo "'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>