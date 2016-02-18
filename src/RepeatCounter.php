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

    // function playScrabble($input)
    //       {
    //         $score = 0;
    //         $lettersArray = str_split($input);
    //           foreach ($lettersArray as $letter) {
    //             if (preg_match('/[aeioulnrst]/i', $letter)) {
    //               $score = $score + 1;
    //             }
    //             if (preg_match('/[dg]/i', $letter)) {
    //               $score = $score + 2;
    //             }
    //             if (preg_match('/[bcmp]/i', $letter)) {
    //               $score = $score + 3;
    //             }
    //             if (preg_match('/[fhvwy]/i', $letter)) {
    //               $score = $score + 4;
    //             }
    //             if (preg_match('/[k]/i', $letter)) {
    //               $score = $score + 5;
    //             }
    //             if (preg_match('/[qz]/i', $letter)) {
    //               $score = $score + 10;
    //             }
    //           }
    //         return $score;
    //       }
?>
