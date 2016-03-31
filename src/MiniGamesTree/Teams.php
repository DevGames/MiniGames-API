<?php

namespace MiniGamesTree;

class Teams extends Base\ArrayBase{
  
  public function addTeam($teamsname,$name){
  return $this->worker[$teamsname]{$name} = $name;
  }
  
}
