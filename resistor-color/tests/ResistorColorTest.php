<?php

namespace Tests;

use App\ResistorColor;
use PHPUnit\Framework\TestCase;

class ResistorColorTest extends TestCase
{
    private object $ex;
    private array $colors;

    protected function setUp(): void
    {
        parent::setUp();
    
        $this->ex = new ResistorColor;
        $this->colors = [
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
    }
    

    public function testColors(): void
    {

        $this->assertEquals($this->colors, $this->ex->getColors());
    }

    public function testBlackColorCode(): void
    {
        $this->assertEquals($this->ex->colorCode("black"), 0);
    }

    public function testOrangeColorCode(): void
    {
        $this->assertEquals($this->ex->colorCode("orange"), 3);
    }

    public function testWhiteColorCode(): void
    {
        $this->assertEquals($this->ex->colorCode("white"), 9);
    }
}
