<?php

namespace MiniGamesTree;

class Team {
  
  private $teams = array();
  
  public function addTo($teamname,$name){
    return $this->teams[strtolower($teamname)][] = $name;
  }
  
  public function RemoveTo($teamname,$name){
   unset($this->teams[array_search($name, $this->teams[strtolower($teamname]))]);
  }
  
  public function getCount($teamname){
    return count($this->teams[strtolower($teamname)]);
  }
  
  public function isInTeam($teamname,$name){
        return in_array($name, $this->teams[strtolower($teamname)]);
    }
    
    public function getPlayersInTeam(\pocketmine\Server $server,$teamname){
    foreach ($this->teams[strtolower($teamname)] as $p):
    return $server->getPlayer($p);
    endforeach;
    }
    
    public function listPlayerTeams($teamname,$glue = " .*. "){
        return implode($glue, $this->teams[strtolower($teamname)]);
    }
  
}
