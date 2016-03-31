<?php

namespace MiniGamesTree;

class Teams extends Base\ArrayBase{
  
  public $gts;
  
  public function addTeam($teamsname,$name){
  return $this->worker[$teamsname]{$name} = $name;
  }
  
  public function getScore(){
  $this->gts = new teamscore();
  return $this->gts;
  }
  
}
class teamscore extends Base\ArrayBase{
  
  public function getScoreTeam($teamname){
  return $this->teamscore[$teamname];
  }
  
  public function setScoreTeam($teamname,$amount){
  return $this->teamscore[$teamname] = $amount;
  }
}
