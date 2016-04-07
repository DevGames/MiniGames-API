<?php

namespace MiniGamesTree;

class Teams extends Base\ArrayBase{
  
  public $gts;
  
  private $arrayt = array("getTeam");
  
  public function addToTeam($teamsname,$name){
  $this->arrayt["getTeam"][$name] = $teamsname;
  return $this->worker[strtoupper($teamsname)]{$name} = $name;
  }
  
  public function getPlayerTeamName($name){
  return $this->arrayt["getTeam"][$name];
  }
  
  public function removePlayerTeam($teamsname,$name){
  unset($this->worker[strtoupper($teamsname)]{$name});
  }
  
  public function getScore(){
  $this->gts = new teamscore();
  return $this->gts;
  }
  
  public function getAllPlayersInTeamName($teamname,$gule = " : "){
    return join($gule,$this->worker{strtoupper($teamname)});
  }
  
  public function isPlayersInGame($player){
    return (in_array($player->getName(),$this->worker));
  }
  
  public function getTeamInGame($teamname,$player){
    foreach($this->worker{strtoupper($teamname)} as $teams){
      return ($teams == $player->getName());
    }
  }
  
  public function getPlayersTeams($teamname,$server){
    foreach($this->worker{strtoupper($teamname)} as $teams){
      return $server->getPlayer($teams);
    }
  }
  
  public function setTeamWon($teamname){
    return $this->won = strtoupper($teamname);
  }
  
  public function getTeamWon(){
  return $this->won;
  }
  
  public function getCountTeam($teamname){
  return count($this->worker[strtoupper($teamname)]);
  }
}
class teamscore extends Base\ArrayBase{
  
  public function getScoreTeam($teamname){
  return $this->teamscore[strtoupper($teamname)];
  }
  
  public function setScoreTeam($teamname,$amount){
  return $this->teamscore[strtoupper($teamname)] = $amount;
  }
}
