<?php
    class RepeatCounter
    {

        function countExplode($input1, $input2)
        {
            $explodedArray = explode(" ", $input2);
            foreach ($explodedArray as $index => $word) {
                $explodedArray[$index] = preg_replace('/[^a-z]/i', '', $word);
            }
            return $explodedArray;
        }

        function countRepeats($input1, $input2)
        {
            $count = 0;
            $explodedArray = explode(" ", $input2);
            foreach ($explodedArray as $index => $word) {
                $explodedArray[$index] = preg_replace('/[^a-z]/i', '', $word);
                if ($explodedArray[$index] == $input1) {
                    $count = $count +1;
                }
            }
            return $count;
        }

    }
?>
