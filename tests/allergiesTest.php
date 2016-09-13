<?php
    require_once "src/allergies.php";
    class allergiesTest extends PHPUnit_Framework_TestCase
    {
        function test_invalid_score()
        {
            $test_allergies = new Allergies;
            $input = 256;
            $output = $test_allergies->checkAllergy($input);
            $this->assertEquals("Invalid allergy score!", $output);
        }

        function test_allergies_cat()
        {
            $test_allergies_cat = new Allergies;
            $input = 128;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("cats", $output);
        }

        function test_allergies_pollen()
        {
            $test_allergies_cat = new Allergies;
            $input = 64;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("pollen", $output);
        }

        function test_allergies_chocolate()
        {
            $test_allergies_cat = new Allergies;
            $input = 32;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("chocolate", $output);
        }

        function test_allergies_tomatoes()
        {
            $test_allergies_cat = new Allergies;
            $input = 16;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("tomatoes", $output);
        }

        function test_allergies_strawberries()
        {
            $test_allergies_cat = new Allergies;
            $input = 8;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("strawberries", $output);
        }

        function test_allergies_shellfish()
        {
            $test_allergies_cat = new Allergies;
            $input = 4;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("shellfish", $output);
        }

        function test_allergies_peanuts()
        {
            $test_allergies_cat = new Allergies;
            $input = 2;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("peanuts", $output);
        }

        function test_allergies_eggs()
        {
            $test_allergies_cat = new Allergies;
            $input = 1;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("eggs", $output);
        }

        function test_allergies_cats_pollen()
        {
            $test_allergies_cat = new Allergies;
            $input = 192;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("cats pollen", $output);
        }

        function test_allergies_pollen_strawberries()
        {
            $test_allergies_cat = new Allergies;
            $input = 72;
            $output = $test_allergies_cat->checkAllergy($input);
            $this->assertEquals("pollen strawberries", $output);
        }


    }
?>
