<?php

namespace App;

class ResistorColor {

    public function getColors() : array
    {
        $colors = [
            "black",
            "brown",
            "red",
            "orange",
            "yellow",
            "green",
            "blue",
            "violet",
            "grey",
            "white"
        ];

        return $colors;
    }

    function colorCode(string $color): int
    {
        
        $colorIndex = array_search($color, $this->getColors());
        return $colorIndex;
    }

}

