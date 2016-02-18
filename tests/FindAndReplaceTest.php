<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_replace_one_word()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "rock";
            $second_input = "stone";
            $third_input = "rOck, i think we roCknroll";

            //Act
            $result = $test_FindAndReplace->replacer($first_input, $second_input, $third_input);


            //Assert
            $this->assertEquals(array("stone, i think we stonenroll"), $result);

        }

        function test_count()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "the then thed thed thee the the";
            $second_input = "the";


            //Act
            $result = $test_FindAndReplace->counter($first_input, $second_input);


            //Assert
            $this->assertEquals(3, $result);

        }

    }
?>
