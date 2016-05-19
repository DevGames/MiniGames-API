<?php

namespace MiniGamesTree;

class Team {
  
  private $teams = array("getTeam" <= array());
  private $get = array();
  private $usn;
  public $ust;
  public function __construct($ust,$usn){
  $this->usn = $usn;
  $this->ust = $ust;
     }
  
  public function add(){
  $this->get{$this->usn} = $this->ust;
  return $this->teams[strtolower($this->ust)][] = $this->usn;
     }
  
  public function getPlayerTeam(){
  return $this->get{$this->usn};
     }
  
  public function remove(){
  unset($this->get[$this->usn]);
  unset($this->teams[array_search($this->usn, $this->teams[strtolower($this->ust]))]);
     }
  
  public function getCount(){
    if($this->ust == ""){
     return count($this->teams);
         }else{
      return count($this->teams[strtolower($this->ust)]);
           }
     }
  
  public function isInTeam(){
    if($this->ust == ""){
  return in_array($this->usn, $this->teams);
       } else {
  return in_array($this->usn, $this->teams[strtolower($this->ust)]);
         }
    }
    
  public function getPlayers(\pocketmine\Server $server){
    if($this->ust == ""){
    foreach ($this->teams[$this->getPlayerTeam()] as $p):
    return $server->getPlayer($p);
    endforeach;
    } else {
    foreach ($this->teams[strtolower($this->ust)] as $p):
    return $server->getPlayer($p);
    endforeach;
       }
    }
    
  public function getScore(){
  $a = new Score\TeamScore();
  return $a;
    }
    
   public function listPlayers($glue = " .*. "){
     if($this->ust == ""){
   return implode($glue, $this->teams);
    } else {
   return join($glue, $this->teams[strtolower($this->ust)]);
    }}
  
}
