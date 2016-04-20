<?php

namespace MiniGamesTree\Score;

class TeamScore{
    
    public $score = array();
    
    public function addScore($toteam,$amount){
        $this->score[strtolower($toteam)] = $amount;
    }
    
    public function getScore($toteam){
        return $this->score[strtolower($toteam)];
    }

}
