<?php

namespace MiniGamesTree\Score;

class TeamScore extends \MiniGamesTree\Team{
    
    public $score = array();
    
    public function addScore($amount){
        $this->score[strtolower($this->ust)] = $amount;
    }
    
    public function getScore(){
        return $this->score[strtolower($this->ust)];
    }
    
    public function DisableScore(){
       unset($this->score[$this->ust]);
    }

}
