<?php

namespace App;

class RnaTranscription {

    private $rna;
    private $newrna = '';

    public function toRna(string $char) : string
    {
        $this->rna = [
            'G' => 'C',
            'C' => 'G',
            'T' => 'A',
            'A' => 'U',
        ];

        for( $i = 0; $i < strlen($char); $i++) {
            $character = $char[$i];
            $this->newrna .= $this->rna[$character];
        }

        return $this->newrna;
    }
    
}