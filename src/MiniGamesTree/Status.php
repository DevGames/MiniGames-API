<?php

namespace MiniGamesTree;

class Status extends Base\ArrayBase{
    
    const Mode1 = "Stop";
    
    const Mode2 = "Waiting";
    
    const Mode3 = "Start";
    
    public function setStart(){
    $this->status{
    "Mode"
    } = self::Mode3;
    }
  
    public function setStop(){
    $this->status{
    "Mode"
    } = self::Mode1;
    }
    
    public function setWiting(){
    $this->status{
    "Mode"
    } = self::Mode2;
    }
    public function isStart(){
    if($this->isWiting() || $this->isStop()):
    return $this->status[0] == (self::Mode3);
    endif;
    }
    
    public function isStop(){
    if($this->isWiting() || $this->isStart()):
    return $this->status[0] == (self::Mode1);
    endif;
    }
    
    public function isWiting(){
    if($this->isStop() || $this->isStart()):
    return $this->status[0] == (self::Mode2);
    endif;
    }
}
?>
