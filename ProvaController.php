<?php

/*
function getTabColors($dedication) {
    $tabColors = array(
        "Night" => array(),
        "Morning" => array(),
        "Afternoon" => array(),
        "Evening" => array()
    );

    //-----------------------------------------------------------------------
    //                          (RIVEDI)
    //-----------------------------------------------------------------------
    // Calcola le percentuali settimanali per ciascuna attività
    $weeklyPercentages = array(
        "Sleep" => 1 / 24, // Una ora di sonno al giorno   
        "Gym" => 0.25,     // 3 ore di allenamento a settimana su 12 ore giornaliere (4 fasi)
        "Basket" => 0.5,   // 6 ore di basket a settimana su 12 ore giornaliere (4 fasi)
        "Other" => 0.25    // Il resto del tempo
    );

    // Suddivide la giornata in 4 fasi: notte, mattina, pomeriggio e sera
    $dayDivisions = array(
        "Night" => range(0, 6),
        "Morning" => range(7, 11),
        "Afternoon" => range(12, 17),
        "Evening" => range(18, 22)
    );

    // Calcola il numero di ore giornaliere per ciascuna attività
    $dailyHours = array();
    foreach ($weeklyPercentages as $activity => $percentage) {
        $dailyHours[$activity] = $percentage * 12; // 12 ore giornaliere per $dedication=1
    }

    // Assegna un'attività a ciascuna fase della giornata
    foreach ($dayDivisions as $phase => $hours) {
        foreach ($hours as $hour) {
            // Assegna "Sleep" per l'ora della notte e per l'ora della sera
            if ($phase === "Night" || $phase === "Evening") {
                $tabColors[$phase][$hour] = "Sleep";
            } else {
                // Altrimenti, assegna le altre attività in base alle percentuali settimanali
                $remainingActivities = array_keys($weeklyPercentages);
                $remainingActivities = array_diff($remainingActivities, ["Sleep"]); // Rimuovi "Sleep" dalla lista delle attività rimanenti

                // Calcola il totale delle percentuali settimanali delle attività rimanenti
                $totalPercentage = array_sum(array_map(function($activity) use ($weeklyPercentages) {
                    return $weeklyPercentages[$activity];
                }, $remainingActivities));

                // Genera un numero casuale per selezionare un'attività in base alle percentuali settimanali
                $randomNumber = 0;
                if ($totalPercentage > 0) {
                    $randomNumber = mt_rand(0, 9999) / 10000 * $totalPercentage;
                }

                // Seleziona l'attività in base al numero casuale generato
                $currentPercentage = 0;
                foreach ($remainingActivities as $activity) {
                    $currentPercentage += $weeklyPercentages[$activity];
                    if ($randomNumber <= $currentPercentage) {
                        $tabColors[$phase][$hour] = $activity;
                        break;
                    }
                }
            }
        }
    }

    return $tabColors;
}
*/


function generateHourDivision($dedication) {
    $hourDivision = array();

    // Calcoliamo il numero totale di ore di allenamento per la settimana
    $totalTrainingHours = $dedication * 3 * 2; // 3 giorni di allenamento, 2 ore al giorno

    // Calcoliamo le percentuali settimanali per ciascuna attività, escludendo "Sleep"
    $basketPercentage = (5 / $totalTrainingHours) * 100;
    $gymPercentage = (3 / $totalTrainingHours) * 100;

    // Suddivisione della giornata in quattro fasi: notte, mattina, pomeriggio, sera
    $hourDivision["Notte"] = range(0, 6); // Ore 0-6 (notte)
    $hourDivision["Notte"][] = 23; // Aggiungi l'ora 23 alla fase "Notte"
    $hourDivision["Mattina"] = range(7, 11); // Ore 7-11 (mattina)
    $hourDivision["Pomeriggio"] = range(12, 17); // Ore 12-17 (pomeriggio)
    $hourDivision["Sera"] = range(18, 22); // Ore 18-22 (sera)

    // Assegniamo le attività durante le fasi della giornata
    foreach ($hourDivision as $phase => $hours) {
        foreach ($hours as $hour) {
            switch ($phase) {
                case "Mattina":
                    // Distribuiamo le ore di "Basket" e "Gym" in base alle percentuali settimanali
                    $randomNumber = rand(1, 100);
                    if ($randomNumber <= $basketPercentage) {
                        $activity = "Basket";
                    } elseif ($randomNumber <= ($basketPercentage + $gymPercentage)) {
                        $activity = "Gym";
                    } else {
                        $activity = "Other";
                    }
                    break;
                case "Pomeriggio":
                    // Distribuiamo le ore di "Gym" e "Basket" in base alle percentuali settimanali
                    $randomNumber = rand(1, 100);
                    if ($randomNumber <= $gymPercentage) {
                        $activity = "Gym";
                    } elseif ($randomNumber <= ($basketPercentage + $gymPercentage)) {
                        $activity = "Basket";
                    } else {
                        $activity = "Other";
                    }
                    break;
                case "Sera":
                    // Distribuiamo le ore rimanenti in modo equo tra "Basket" e "Gym"
                    $activity = (rand(1, 2) == 1) ? "Basket" : "Gym";
                    break;
                default:
                    // Durante la notte, l'attività è "Sleep"
                    $activity = "Sleep";
                    break;
            }
            $hourDivision[$phase][$hour] = $activity;
        }
    }

    return $hourDivision;
}


?>
