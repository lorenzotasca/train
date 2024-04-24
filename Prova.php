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

        .Sleep {
            background-color: #99ff99;
        }

        .Other {
            background-color: #ffff99;
        }

    </style>
</head>
<body>
    <div class="legend">
        <strong>Legend</strong><br><br><br>
        <span class="Basket"></span> Basket<br><br>
        <span class="Gym"></span> Gym<br><br>
        <!--<span class="Personal_growth"></span> Personal<br>growth<br><br>-->
        <span class="Sleep"></span> Sleep<br><br>
        <span class="Other"></span> Other
    </div>

    <?php

        session_start();

        include 'ProvaController.php';

        // Ottenere il livello di dedizione dalla sessione o da un'altra fonte
        $dedication = 1;

        $hourDivision = generateHourDivision($dedication);
        //$activities = getDailyActivities($dedication);
        //$dayDivisions = divideDay($dedication);

        $weekDays = array(
            "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
        );
        $hours = range(0, 23);

        //$hourDivision = array();
        echo "<table>";
        echo "<tr><th></th>";
        foreach ($weekDays as $day) {
            echo "<th><a href='Train.php'>$day</a></th>";
        }
        echo "</tr>";

        

        foreach ($hours as $hour) {
            $hour_display = sprintf("%02d:00", $hour);
            echo "<tr><td>$hour_display</td>";
            foreach ($weekDays as $day) {
                //echo "<td class='";


                // CI SONO PROBLEMI:                        
                // IN PROVACONTROLLER.PHP ->    $hourDivision[$phase][$hour]
                //           IN PROVA.PHP ->    $hourDivision[$day][$hour]

                

                if (isset($hourDivision[$day][$hour])) {
                    $activity = $hourDivision[$day][$hour];
                } else {
                    // Se l'indice non esiste, assegna un valore di default
                    $activity = "Other";
                }
                echo "<td class='$activity'>entra</td>";
                

                //PROVA CON DEDICATION = 1
                /*
                switch ($day){
                    case "Monday":
                        if (($hour >= 0 && $hour <= 6) || $hour == 23) {
                            echo "Sleep";
                        } elseif (($hour >= 7 && $hour <= 15) || ($hour >= 18 && $hour <= 22)) {
                            echo "Other";
                        } elseif ($hour == 16) {
                            echo "Gym";
                        } elseif ($hour == 17) {
                            echo "Basket";
                        }
                        break;
                    case "Tuesday":
                    case "Thursday":
                    case "Saturday":
                    case "Sunday":
                        if (($hour >= 0 && $hour <= 6) || $hour == 23) {
                            echo "Sleep";
                        } elseif ($hour >= 7 && $hour <= 22){
                            echo "Other";
                        }
                        break; // Aggiungi questa riga
                    case "Wednesday":
                    case "Friday":
                        if (($hour >= 0 && $hour <= 6) || $hour == 23) {
                            echo "Sleep";
                        } elseif (($hour >= 7 && $hour <= 15) || ($hour >= 18 && $hour <= 22)) {
                            echo "Other";
                        } elseif ($hour >= 16 && $hour <= 17) {
                            echo "Basket";
                        }
                        break;
                }
                */
        
                //echo "'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>