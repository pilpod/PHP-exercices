<?php

namespace App;

class ReverseString {

    function reverseString(string $text): string
    {
        $textReversed = strrev($text);
        return $textReversed;
    }

}

