<?php

namespace App;

class Leap {

    function isLeap(int $year): bool
    {
        $result = $this->isDivisibleBy($year);
        return $result;
    }

    public function isDivisibleBy(int $year) : bool
    {
        $result = false;

        if($year % 4 === 0) {
            $result = true;
        }

        if($year % 100 === 0 && $year % 400 !== 0) {
            $result = false;
        }

        return $result;
    }

}

