<?php

namespace MiniGamesTree\Score;

class PlayerScore extends \MiniGamesTree\Singles{
    
    public $score = array();
    
    public $eror = "";

    public function setScore($name,$amount){
        if($this->isPlayer($name)){
            $this->score[$name] = $amount;
        }else{
            unset($this->score{$name});
            $output = $name." IS Not In Game , Canot Set Score";
            $output .= " ";
            {$this->eror = $output;}
        }
    }
    
    public function getScore($name){
        if($this->isPlayer($name)){
            $this->score[$name];
        }else{
            $output = $name." IS Not In Game , Canot get Score";
            $output .= " ";
            {$this->eror = $output;}
        }
    }
    
    public function getError(){
    return $this->eror;
    }
}
