<?php

    class Allergies
    {

        function checkAllergy($score)
        {
            $allergyCatalog = array([128, "cats"], [64, "pollen"], [32, "chocolate"], [16, "tomatoes"], [8, "strawberries"], [4, "shellfish"], [2, "peanuts"], [1, "eggs"]);

            $myAllergies = array();
            $runningScore = $score;

            if ($score > 255) {
                return [false];
            }

            for ($i = 0; $i < count($allergyCatalog); $i++) {
                if ($runningScore >= $allergyCatalog[$i][0]) {
                    array_push($myAllergies, $allergyCatalog[$i][1]);
                    $runningScore -= $allergyCatalog[$i][0];
                }
            }

            // if ($runningScore >= 128) {
            //     array_push ($myAllergies, "cats");
            //     $runningScore -= 128;
            // }
            // if ($runningScore >= 64) {
            //     array_push($myAllergies, "pollen");
            //     $runningScore -= 64;
            // }
            // if ($runningScore >= 32) {
            //     array_push($myAllergies, "chocolate");
            //     $runningScore -= 32;
            // }
            // if ($runningScore >= 16) {
            //     array_push($myAllergies, "tomatoes");
            //     $runningScore -= 16;
            // }
            // if ($runningScore >= 8) {
            //     array_push($myAllergies, "strawberries");
            //     $runningScore -= 8;
            // }
            // if ($runningScore >= 4) {
            //     array_push($myAllergies, "shellfish");
            //     $runningScore -= 4;
            // }
            // if ($runningScore >= 2) {
            //     array_push($myAllergies, "peanuts");
            //     $runningScore -= 2;
            // }
            // if ($runningScore >= 1) {
            //     array_push($myAllergies, "eggs");
            //     $runningScore -= 1;
            // }

            return implode(" ", $myAllergies);
        }

    }


?>
