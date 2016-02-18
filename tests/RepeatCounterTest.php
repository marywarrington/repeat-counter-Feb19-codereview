<!-- testing with php unit, use this template for guidance -->
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

        function test_countRepeats_findOneWord()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "here";
            $input2 = "here is a string";
            // Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);
            // Assert
            $this->assertEquals(1, $result);
        }
    }

 ?>
