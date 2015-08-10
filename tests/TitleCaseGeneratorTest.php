<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

//First test: take one letter from user to test Title Case Generator
        function test_makeTitleCase_oneLetter()
        {
            //Arange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "b";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("B", $result);
        }

//Second test: take one one word from user to test Title Case Generator
        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

//Third test: take full sentence from user to test Title Case Generator
        function test_makeTitleCase_multipleWords()
        {
            //Arange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }
    }


 ?>
