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
                background-color: #ff9999; /* Rosso */
            }

            .Gym {
                background-color: #99ccff; /* Blu */
            }

            .Personal_growth {
                background-color: #99ff99; /* Verde */
            }

            .Rest {
                background-color: #ffff99; /* Giallo */
            }

        </style>
    </head>
    <body>

            

        <div class="legend">
            <strong>Legend</strong><br><br><br>
            <span class="Basket"></span> Basket<br><br>
            <span class="Gym"></span> Gym<br><br>
            <span class="Personal_growth"></span> Personal<br>growth<br><br>
            <span class="Rest"></span> Rest
        </div>

        <?php

            // PER OGNI GIORNO DELLA SETTIMANA, FARE UNA NUOVA PAGINA DOVE SI VEDA CHIARAMENTE LA DESCRIZIONE DEGLI ALLENAMENTI E 
            // LE STESSE INFORMAZIONI DIVERSE SEMPRE PER COLORE DI OGNI ATTIVITA' AD OGNI ORARIO
            // (SE STESSA COSA RIPETUTA SU PIU' ORARI CONSECUTIVI, RAGGRUPPARE IN UNA CELLA SOLA (CON COLSPAN = NUMERO DI ORARI CONSECUTIVI IDENTICI))

            // Array associativo con giorni della settimana e relativi orari
            $orari_settimanali = array(
                "Monday" => array("0:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"),
                "Tuesday" => array("0:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"),
                "Wednesday" => array("0:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"),
                "Thursday" => array("0:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"),
                "Friday" => array("0:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"),
                "Saturday" => array("0:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"),
                "Sunday" => array("0:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00")
            );

            // Stampare la tabella
            echo "<table>";
            echo "<tr><th></th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr>";

            for ($ora = 0; $ora <= 23; $ora++) {
                $ora_display = sprintf("%02d:00", $ora);
                echo "<tr>";
                echo "<td>$ora_display</td>";
                foreach ($orari_settimanali as $giorno => $orari) {
                    /*if (in_array($ora_display, $orari)) {
                        echo "<td class='Rest'></td>";
                    } else {
                        echo "<td></td>";
                    }*/
                    echo "<td></td>";
                }
                
                echo "</tr>";
            }

            echo "</table>";
        ?>

    </body>
</html>