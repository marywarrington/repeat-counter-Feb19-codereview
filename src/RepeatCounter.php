<?php
    class RepeatCounter
    {

        function countExplode($input1, $input2)
        {
            return $explodedArray = explode(" ", $input2);
        }

        function countRepeats($input1, $input2)
        {
            $count = 0;
            $explodedArray = explode(" ", $input2);
            foreach ($explodedArray as $word) {
                if ($word == $input1) {
                    $count = $count +1;
                }
            }
            return $count;
        }

    }
?>
