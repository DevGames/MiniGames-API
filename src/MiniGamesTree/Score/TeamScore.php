<?php

namespace MiniGamesTree\Score;

class TeamScore{
    
    public $score = array();
    
    public function addScore($teamname,$amount){
        $this->score[strtolower($teamname)] = $amount;
    }
    
    public function getScore($teamname){
        return $this->score[strtolower($teamname)];
    }
    
    public function DisableScore($teamname){
       unset($this->score[$teamname]);
    }

}
