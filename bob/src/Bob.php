<?php

namespace App;

class Bob {

    private string $questionResponse = "Sure.";
    private string $yellResponse = "Whoa, chill out!";
    private string $yellQuestionResponse = "Calm down, I know what I'm doing!";
    private string $anythingWasSaidResponse = "Fine. Be that way!";
    private string $anythingElseResponse = "Whatever.";

    public function respondTo(string $phrase)
    {
        $isQuestion = $this->isAQuestion($phrase);
        $isShouting = $this->isShouting($phrase);
        $isYellQuestion = $this->isAYellQuestion($phrase);
        $isSilence = $this->sayNothing($phrase);

        if( $isQuestion ) {
            return $this->questionResponse;
        }
        if( $isYellQuestion ) {
            return $this->yellQuestionResponse;
        }
        if( $isShouting ) {
            return $this->yellResponse;
        }
        if( $isSilence ) {
            return $this->anythingWasSaidResponse;
        }
        
        return $this->anythingElseResponse;
    }

    public function isShouting(string $phrase)
    {
        $upperQuantity = $this->countUppercases($phrase);
        $lowerQuantity = $this->countLowercases($phrase);
        if( $upperQuantity > 1 && $lowerQuantity < 1) {
            return true;
        }
    }

    public function isAQuestion(string $phrase)
    {
        $hasInterrogation = $this->hasAtTheEndAnInterrogation($phrase);
        $lowerQuantity = $this->countLowercases($phrase);
        $digitQuantity = $this->hasDigits($phrase);
        $hasNoLetters = $this->hasNoLetters($phrase);

        if($hasInterrogation && $lowerQuantity > 0 || $digitQuantity > 0 || $hasNoLetters) {
            return $hasInterrogation;
        }
    }

    public function isAYellQuestion(string $phrase)
    {
        $upperQuantity = $this->countUppercases($phrase);
        $hasInterrogation = $this->hasAtTheEndAnInterrogation($phrase);
        $lowerQuantity = $this->countLowercases($phrase);

        if( $upperQuantity >= 2 && $hasInterrogation && $lowerQuantity < 1) {
            return true;
        }
    }

    public function sayNothing($phrase) : bool
    {
        $result = ltrim($phrase);
        if(strlen($result) == 0) {
            return true;
        }
        return false;
    }

    public function hasAtTheEndAnInterrogation(string $phrase) : bool
    {
        $phrase = trim($phrase);
        $lastChar = substr($phrase, -1, 1);
        $result = ($lastChar == "?") ? true : false;
        return $result;
    }

    public function countUppercases(string $phrase) : int
    {
        $regex = '/([[:upper:]]{2,})/';
        preg_match($regex, $phrase, $matches);
        $upperQuantity = count($matches);

        return $upperQuantity;
    }

    public function countLowercases(string $phrase) : int
    {
        $regex = '/([[:lower:]]{2,})/';
        $lowerQuantity = $this->returnNumbOfMatches($regex, $phrase);
        return $lowerQuantity;
    }

    public function hasDigits(string $phrase) : int
    {
        $regex = '/(\d)/';
        $digitQuantity = $this->returnNumbOfMatches($regex, $phrase);
        return $digitQuantity;
    }

    public function hasNoLetters(string $phrase) : bool
    {
        $regex = '/[a-zA-Z]/';
        $letterQuantity = $this->returnNumbOfMatches($regex, $phrase);
        $result = ($letterQuantity < 1) ?  true : false;
        return $result;
    }

    public function returnNumbOfMatches($regex, $phrase) : int
    {
        preg_match($regex, $phrase, $matches);
        $result = count($matches);
        return $result;
    }

    
}