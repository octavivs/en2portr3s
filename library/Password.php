<?php

namespace en2portr3s\library;

class Password {

    private $password;
    public static $ranking = [
        'TOO_SHORT' => 0,
        'WEAK' => 1,
        'MEDIUM' => 2,
        'STRONG' => 3,
        'VERY_STRONG' => 4
    ];

    function __construct($password = '') {
        $this->password = $password;
    }

    public function get() {
        return $this->password;
    }

    public function set($password) {
        $this->password = $password;
    }

    public function rank() {
        $upper = '/[A-Z]/';
        $lower = '/[a-z]/';
        $number = '/[0-9]/';
        $special = '/[@#$%]/';
        $minLength = 8;
        $score = 0;

        if (\strlen($this->password) < $minLength) {
            return $this->ranking['TOO_SHORT']; // End early
        }

        // Increment the score for each of these conditions
        if (\preg_match($upper, $this->password)) {
            $score++;
        }
        if (\preg_match($lower, $this->password)) {
            $score++;
        }
        if (\preg_match($number, $this->password)) {
            $score++;
        }
        if (\preg_match($special, $this->password)) {
            $score++;
        }

        // Penalize if there aren't at least three char types
        if ($score < 3) {
            $score--;
        }

        // Increment the score for every 2 chars longer than the minimum
        if (\strlen($this->password) > $minLength) {
            $score += \floor((\strlen($this->password) - $minLength) / 2);
        }

        // Return a ranking based on the calculated score
        if ($score < 3) {
            return $this->ranking['WEAK'];      // score is 2 or lower
        }
        if ($score < 4) {
            return $this->ranking['MEDIUM'];    // score is 3
        }
        if ($score < 6) {
            return $this->ranking['STRONG'];    // score is 4 or 5
        }
        return $this->ranking['VERY_STRONG'];   // score is 6 or higher
    }

    public function encrypt() {
        
    }

}
