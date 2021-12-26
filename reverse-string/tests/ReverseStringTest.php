<?php

namespace Tests;

use App\ReverseString;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase 
{
    private $ex;

    protected function setUp(): void
    {
        parent::setUp();
    
        $this->ex = new ReverseString;
    }
    

    public function testEmptyString(): void
    {
        
        $this->assertEquals("", $this->ex->reverseString(""));
    }

    public function testWord(): void
    {
        $this->assertEquals("tobor", $this->ex->reverseString("robot"));
    }

    public function testCapitalizedWord(): void
    {
        $this->assertEquals("nemaR", $this->ex->reverseString("Ramen"));
    }

    public function testSentenceWithPunctuation(): void
    {
        $this->assertEquals("!yrgnuh m'I", $this->ex->reverseString("I'm hungry!"));
    }

    public function testPalindrome(): void
    {
        $this->assertEquals("racecar", $this->ex->reverseString("racecar"));
    }

    public function testEvenSizedWord(): void
    {
        $this->assertEquals("reward", $this->ex->reverseString("drawer"));
    }
}
