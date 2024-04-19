<?php
    function getTabColors($dedication) {
        // Array associativo per mappare le attività ai colori
        $colors = array(
            "Basket" => "#ff9999",
            "Gym" => "#99ccff",
            "Personal_growth" => "#99ff99",
            "Sleep" => "#ffff99",
            "Other" => "#ffcc99"
        );

        // Calcolare le percentuali in base al livello di dedizione
        // Modifica la distribuzione delle percentuali in base alle tue esigenze
        switch ($dedication) {
            case 1:
                $percentages = array(
                    "Basket" => 20,
                    "Gym" => 20,
                    "Personal_growth" => 20,
                    "Sleep" => 20,
                    "Other" => 20
                );
                break;
            case 2:
                $percentages = array(
                    "Basket" => 25,
                    "Gym" => 20,
                    "Personal_growth" => 20,
                    "Sleep" => 20,
                    "Other" => 15
                );
                break;
            case 3:
                $percentages = array(
                    "Basket" => 30,
                    "Gym" => 25,
                    "Personal_growth" => 20,
                    "Sleep" => 15,
                    "Other" => 10
                );
                break;
            // Aggiungi altri casi per gestire altri livelli di dedizione, se necessario
            default:
                $percentages = array(
                    "Basket" => 20,
                    "Gym" => 20,
                    "Personal_growth" => 20,
                    "Sleep" => 20,
                    "Other" => 20
                );
                break;
        }

        // Assemblare l'array associativo finale contenente i colori e le percentuali
        $finalData = array();
        foreach ($colors as $activity => $color) {
            $finalData[$activity] = array(
                "color" => $color,
                "percentage" => $percentages[$activity]
            );
        }

        return $finalData;
    }

    // DEDICATION = 1 (PER PROVARE)
    function prova($dedication, $day, $hour){

        $class = '';
    
        switch ($dedication) {
            case 1:
                switch ($day) {
                    case 'Monday':
                        echo "Monday, ";
                        if (($hour >= 0 && $hour <= 6) || $hour == 23) {
                            echo "Sleep, ";
                            $class = 'Sleep';
                        } elseif (($hour >= 7 && $hour <= 15) || ($hour >= 18 && $hour <= 22)) {
                            echo "Other, ";
                            $class = 'Other';
                        } elseif ($hour == 16) {
                            echo "Basket, ";
                            $class = 'Basket';
                        } elseif ($hour == 17) {
                            echo "Gym, ";
                            $class = 'Gym';
                        }
                        break;
                    case 'Tuesday':
                        echo "Tuesday, ";
                        // Gestisci il martedì
                        break;
                    // Aggiungi i casi per gli altri giorni
                    default:
                        echo "Other day, ";
                        $class = 'Other';
                        break;
                }
                break;
            // Aggiungi altri casi per gestire altri livelli di dedizione, se necessario
            
        }
    
        return $class;
    }
    
    

?>