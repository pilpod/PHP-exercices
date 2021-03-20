<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\RnaTranscription;

class RnaTranscriptionTest extends TestCase
{
    private $rna;

    public function setUp() : void
    {
        $this->rna = new RnaTranscription;
    }

    public function testTranscribesGuanineToCytosine() : void
    {
        $this->assertSame('G', $this->rna->toRna('C'));
    }

    public function testTranscribesCytosineToGuanine() : void
    {
        $this->assertSame('C', $this->rna->toRna('G'));
    }

    public function testTranscribesThymineToAdenine() : void
    {
        $this->assertSame('A', $this->rna->toRna('T'));
    }

    public function testTranscribesAdenineToUracil() : void
    {
        $this->assertSame('U', $this->rna->toRna('A'));
    }

    public function testTranscribesAllOccurencesOne() : void
    {
        $this->assertSame('UGCACCAGAAUU', $this->rna->toRna('ACGTGGTCTTAA'));
    }
}
