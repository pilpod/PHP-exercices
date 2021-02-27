<?php

namespace App;

class Hamming {

    public int $count = 0;

    function distance(string $strandA, string $strandB) : int
    {
        $arrStrandA = str_split($strandA);
        $arrStrandB = str_split($strandB);
        $lengthOfString = count($arrStrandA);

        for( $i = 0; $i < $lengthOfString; $i++) {
            if($arrStrandA[$i] == $arrStrandB[$i]) {
                $this->count = $this->count;
            } else {
                $this->count++;
            }
        }

        return $this->count;
    }


}

