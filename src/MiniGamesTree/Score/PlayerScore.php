<?php

namespace MiniGamesTree\Score;

class PlayerScore extends \MiniGamesTree\Singles{
    
    public $score = array();
    
    public $eror = "";

    public function setScore($amount){
        if($this->is($this->usn)){
            $this->score[$this->usn] = $amount;
        }else{
            unset($this->score{$this->usn});
            $output = $this->usn." IS Not In Game , Canot Set Score";
            $output .= " ";
            {$this->eror = $output;}
        }
    }
    
    public function getScore(){
        if($this->is($this->usn)){
            $this->score[$this->usn];
        }else{
            $output = $this->usn." IS Not In Game , Canot get Score";
            $output .= " ";
            {$this->eror = $output;}
        }
    }
    
    public function getError(){
    return $this->eror;
    }
}
