<?php

namespace App;

use DateInterval;
use DateTimeImmutable;

class Gigasecond {

    private int $gigaseconds = 1000000000;

    public function from(DateTimeImmutable $date): DateTimeImmutable
    {
        $interval = new DateInterval("PT{$this->gigaseconds}S");
        $newDate = $date->add($interval);
        return $newDate;
    }

}

