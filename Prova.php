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

    include 'ProvaController.php';

    // Ottenere il livello di dedizione dalla sessione o da un'altra fonte
    $dedication = 3; // livello di dedizione (può essere un valore dinamico)

    // Ottenere i colori e le percentuali delle attività tramite il ProvaController
    $colors = ProvaController::getColors($dedication);

    // Array dei giorni della settimana
    $orari_settimanali = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    // Array degli orari
    $orari = range(0, 23);

    // Stampa la tabella
    echo "<table>";
    echo "<tr><th></th>";
    foreach ($orari_settimanali as $giorno) {
        echo "<th><a href='Train.php'>$giorno</a></th>";
    }
    echo "</tr>";

    // Itera sugli orari e giorni per riempire la tabella
    foreach ($orari as $ora) {
        $ora_display = sprintf("%02d:00", $ora);
        echo "<tr><td>$ora_display</td>";
        foreach ($orari_settimanali as $giorno) {
            $activity = ucfirst($giorno); // Assumendo che l'attività sia associata al giorno
            //$color_class = str_replace('_', ' ', array_search($colors[$activity]['color'], $colors));
            $color_class = str_replace('_', ' ', $activity);
            echo "<td class='$color_class'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>