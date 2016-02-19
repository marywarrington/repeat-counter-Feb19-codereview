<?php
    require_once __DIR__ . '/../src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countExplode_explodeString()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "here";
            $input2 = "here is a string";
            // Act
            $result = $test_RepeatCounter->countExplode($input1, $input2);
            // Assert
            $this->assertEquals(array("here", "is", "a", "string"), $result);
        }

        function test_countExplode_removeNonAlpha()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "anything";
            $input2 = "here!! is: a@ string!";
            // Act
            $result = $test_RepeatCounter->countExplode($input1, $input2);
            // Assert
            $this->assertEquals(array("here", "is", "a", "string"), $result);
        }

        function test_countRepeats_findOneWord()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "here";
            $input2 = "here is a string";
            $input3 = "zebra";
            // Act
            $result1 = $test_RepeatCounter->countRepeats($input1, $input2);
            $result2 = $test_RepeatCounter->countRepeats($input3, $input2);
            // Assert
            $this->assertEquals(1, $result1);
            $this->assertEquals(0, $result2);
        }

        function test_countRepeats_findAll()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "love";
            $input2 = "I love love love zebras";
            $input3 = "zebras";
            // Act
            $result1 = $test_RepeatCounter->countRepeats($input1, $input2);
            $result2 = $test_RepeatCounter->countRepeats($input3, $input2);
            // Assert
            $this->assertEquals(3, $result1);
            $this->assertEquals(1, $result2);
        }

        function test_countRepeats_withPunc()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "love";
            $input2 = "I love, love, !!!love zebras!!!!";
            $input3 = "zebras";
            // Act
            $result1 = $test_RepeatCounter->countRepeats($input1, $input2);
            $result2 = $test_RepeatCounter->countRepeats($input3, $input2);
            // Assert
            $this->assertEquals(3, $result1);
            $this->assertEquals(1, $result2);
        }
    }

 ?>
