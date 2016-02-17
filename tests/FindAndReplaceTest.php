<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_push_input()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $first_input = "rock";
            $second_input = "rock";
            $third_input = "stone";

            //Act
            $result = $test_FindAndReplace->replacer($first_input, $second_input, $third_input);


            //Assert
            $this->assertEquals(array("stone"), $result);

        }

    }
?>
