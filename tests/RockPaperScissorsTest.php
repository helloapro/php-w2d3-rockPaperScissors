<?php
    require_once "src/RockPaperScissors.php";
    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_player1()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $Player1 = "Rock";
            $Player2 = "Paper";
            $output = $test_RockPaperScissors->playRockPaperScissors($Player1, $Player2);
            $this->assertEquals("Player2", $output);
        }

        function test_draw()
        {
            $test_draw = new RockPaperScissors;
            $Player1 = "Rock";
            $Player2 = "Rock";
            $output = $test_draw->playRockPaperScissors($Player1, $Player2);
            $this->assertEquals("Draw", $output);
        }

        function test_scissors_win()
        {
            $test_scissors_win = new RockPaperScissors;
            $Player1 = "Scissors";
            $Player2 = "Paper";
            $output = $test_scissors_win->playRockPaperScissors($Player1, $Player2);
            $this->assertEquals("Player1", $output);
        }
        //
        // function test_allergies_chocolate()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 32;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("chocolate", $output);
        // }
        //
        // function test_allergies_tomatoes()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 16;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("tomatoes", $output);
        // }
        //
        // function test_allergies_strawberries()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 8;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("strawberries", $output);
        // }
        //
        // function test_allergies_shellfish()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 4;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("shellfish", $output);
        // }
        //
        // function test_allergies_peanuts()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 2;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("peanuts", $output);
        // }
        //
        // function test_allergies_eggs()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 1;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("eggs", $output);
        // }
        //
        // function test_allergies_cats_pollen()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 192;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("cats pollen", $output);
        // }
        //
        // function test_allergies_pollen_strawberries()
        // {
        //     $test_allergies_cat = new Allergies;
        //     $input = 72;
        //     $output = $test_allergies_cat->checkAllergy($input);
        //     $this->assertEquals("pollen strawberries", $output);
        // }
    }
?>
