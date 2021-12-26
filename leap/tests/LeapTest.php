<?php

namespace Tests;

use App\Leap;
use PHPUnit\Framework\TestCase;

class LeapTest extends TestCase
{
    private object $ex;

    protected function setUp(): void
    {
        parent::setUp();
        $this->ex = new Leap;
    }
    
    public function testLeapYear(): void
    {
        $this->assertTrue($this->ex->isLeap(1996));
    }

    public function testNonLeapYear(): void
    {
        $this->assertFalse($this->ex->isLeap(1997));
    }

    public function testNonLeapEvenYear(): void
    {
        $this->assertFalse($this->ex->isLeap(1998));
    }

    public function testCentury(): void
    {
        $this->assertFalse($this->ex->isLeap(1900));
    }

    public function testFourthCentury(): void
    {
        $this->assertTrue($this->ex->isLeap(2400));
    }
}
