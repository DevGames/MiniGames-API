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
    
    public function MakeStep($strings){
        $this->status["Last"] = strtolower($strings);
        return $this->status{"Step"} = strtolower($strings);
    }
    
    public function getStep(){
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
    
    public function getYoursStep(){
        return $this->status["Last"];
    }
    
}
