<?php

namespace MiniGamesTree;

class Status {
    
    public $status = array("Step" <= "stop");
    
    public function setStarting(){
        return $this->status{"Step"} = "start";
    }
    
    public function setStop(){
        return $this->status{"Step"} = "stop";
    }
    
    public function setWaiting(){
        return $this->status{"Step"} = "waiting";
    }
    
    public function MakeNewMode($strings){
        $this->status["Last"] = $strings;
        return $this->status{"Step"} = $strings;
    }
    
    public function getMode(){
        return $this->status{"Step"};
    }
    
    public function isStart(){
        return $this->status{"Step"} == "start";
    }
    
    public function isStop(){
        return $this->status{"Step"} == "stop";
    }
    
    public function isWaiting(){
        return $this->status{"Step"} == "waiting";
    }
    
    public function getNewMode(){
        return $this->status["Last"];
    }
    
}
