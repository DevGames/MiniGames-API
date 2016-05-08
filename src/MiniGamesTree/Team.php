<?php

namespace MiniGamesTree;

class Team {
  
  private $teams = array("getTeam" <= array());
  
  private $usn;
  private $ust;
        public function __construct($ust,$usn){
	$this->usn = $usn;
	$this->ust = $ust;
	 }
  
     public function addTo(){
    $this->teams{"getTeam"}[$name] = $this->ust;
    return $this->teams[strtolower($this->ust)][] = $name;
     }
  
     public function getTeam(){
  return $this->teams{"getTeam"}[$this->usn];
     }
  
     public function RemoveTo(){
   unset($this->teams["getTeam"][$this->usn]);
   unset($this->teams[array_search($this->usn, $this->teams[strtolower($this->ust]))]);
     }
  
     public function getCount(){
    return count($this->teams[strtolower($this->ust)]);
     }
  
    public function isInTeam(){
    return in_array($this->usn, $this->teams[strtolower($this->ust)]);
    }
    
    public function getPlayers(\pocketmine\Server $server){
    foreach ($this->teams[strtolower($this->ust)] as $p):
    return $server->getPlayer($p);
    endforeach;
    }
    
    public function getScore(){
      $a = new Score\TeamScore();
      return $a;
    }
    
    public function listPlayers($glue = " .*. "){
        return implode($glue, $this->teams[strtolower($this->ust)]);
    }
  
}
