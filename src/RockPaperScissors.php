<?php

    class RockPaperScissors
    {

        function playRockPaperScissors($Player1, $Player2)
        {
            if (($Player1 == "Rock") && ($Player2 == "Scissors")) {
                return "Player1";
        }   elseif (($Player1 == "Paper") && ($Player2 == "Rock")) {
                return "Player1";
        }   elseif (($Player1 == "Scissors") && ($Player2 == "Paper")) {
                return "Player1";
        }   elseif (($Player1 == "Scissors") && ($Player2 == "Rock")) {
                return "Player2";
        }   elseif (($Player1 == "Paper") && ($Player2 == "Scissors")) {
                return "Player2";
        }   elseif (($Player1 == "Rock") && ($Player2 == "Paper")) {
                return "Player2";
        }   else {
                return "Draw";
        }

        }



    }


?>
