<?php

namespace Tests;

use App\Hamming;
use PHPUnit\Framework\TestCase;

class HammingTest extends TestCase
{
    protected $hamming;

    protected function setUp() : void
    {
        parent::setUp();
        $this->hamming = new Hamming;
    }
    
    public function testNoDifferenceBetweenIdenticalStrands() : void
    {
        $this->assertEquals(0, $this->hamming->distance('A', 'A'));
    }

    public function testCompleteHammingDistanceOfForSingleNucleotideStrand() : void
    {
        $this->assertEquals(1, $this->hamming->distance('A', 'G'));
    }

    public function testCompleteHammingDistanceForSmallStrand() : void
    {
        $this->assertEquals(2, $this->hamming->distance('AG', 'CT'));
    }

    public function testSmallHammingDistance() : void
    {
        $this->assertEquals(1, $this->hamming->distance('AT', 'CT'));
    }

    public function testSmallHammingDistanceInLongerStrand() : void
    {
        $this->assertEquals(1, $this->hamming->distance('GGACG', 'GGTCG'));
    }

    public function testLargeHammingDistance() : void
    {
        $this->assertEquals(4, $this->hamming->distance('GATACA', 'GCATAA'));
    }

    public function testHammingDistanceInVeryLongStrand() : void
    {
        $this->assertEquals(9, $this->hamming->distance('GGACGGATTCTG', 'AGGACGGATTCT'));
    }

    public function testExceptionThrownWhenStrandsAreDifferentLength() : void
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('DNA strands must be of equal length.');
        $this->hamming->distance('GGACG', 'AGGACGTGG');
    }
}
