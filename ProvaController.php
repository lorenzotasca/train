<?php
class ProvaController {
    public static function getColors($dedication) {
        // Definizione dei colori base per le attività
        $baseColors = array(
            "Basket" => "#ff9999",
            "Gym" => "#99ccff",
            "Personal_growth" => "#99ff99",
            "Sleep" => "#ffff99",
            "Other" => "#ffcc99"
        );

        // Calcolo delle percentuali in base al livello di dedizione
        $colors = array();
        foreach ($baseColors as $activity => $color) {
            $percentage = self::calculatePercentage($dedication);
            $colors[$activity] = array("color" => $color, "percentage" => $percentage);
        }

        return $colors;
    }

    // Metodo per calcolare le percentuali in base al livello di dedizione
    private static function calculatePercentage($dedication) {
        // Definisci qui la logica per calcolare le percentuali
        // Ad esempio:
        switch ($dedication) {
            case 1:
                return array("Basket" => 20, "Gym" => 10, "Personal_growth" => 5, "Sleep" => 30, "Other" => 35);
            case 2:
                return array("Basket" => 25, "Gym" => 15, "Personal_growth" => 10, "Sleep" => 25, "Other" => 25);
            case 3:
                return array("Basket" => 30, "Gym" => 20, "Personal_growth" => 15, "Sleep" => 20, "Other" => 15);
            case 4:
                return array("Basket" => 35, "Gym" => 25, "Personal_growth" => 20, "Sleep" => 15, "Other" => 5);
            case 5:
                return array("Basket" => 40, "Gym" => 30, "Personal_growth" => 20, "Sleep" => 10, "Other" => 0);
            default:
                return array("Basket" => 20, "Gym" => 20, "Personal_growth" => 20, "Sleep" => 20, "Other" => 20);
        }
    }
}
?>