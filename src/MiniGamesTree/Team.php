<?php

namespace MiniGamesTree;

class Team {
  
  private $teams = array("getTeam" <= array());
  
  public function addTo($teamname,$name){
    $this->teams{"getTeam"}[$name] = $teamname;
    return $this->teams[strtolower($teamname)][] = $name;
  }
  
  public function getTeam($name){
  return $this->teams{"getTeam"}[$name];
  }
  
  public function RemoveTo($teamname,$name){
   unset($this->teams["getTeam"][$name]);
   unset($this->teams[array_search($name, $this->teams[strtolower($teamname]))]);
  }
  
  public function getCount($teamname){
    return count($this->teams[strtolower($teamname)]);
  }
  
  public function isInTeam($teamname,$name){
        return in_array($name, $this->teams[strtolower($teamname)]);
    }
    
    public function getPlayers(\pocketmine\Server $server,$teamname){
    foreach ($this->teams[strtolower($teamname)] as $p):
    return $server->getPlayer($p);
    endforeach;
    }
    
    public function getScore(){
      $a = new Score\TeamScore();
      return $a;
    }
    
    public function listPlayers($teamname,$glue = " .*. "){
        return implode($glue, $this->teams[strtolower($teamname)]);
    }
  
}
