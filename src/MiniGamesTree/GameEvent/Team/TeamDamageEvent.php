<?php

namespace MiniGamesTree\GameEvent\Team;

use pocketmine\event\Cancellable;
use pocketmine\event\Event;

class TeamDamageEvent extends Event implements Cancellable{

    private $player;
    private $damager;
    private $bool;
    private $tdn;
    private $tpn;
    
    public function __construct($player , $dm , $bool , $tdn , $tpn){
        $this->player = $player;
        $this->damager = $dm;
        $this->bool = $bool;
        $this->tdn = $tdn;
        $this->tpn = $tpn;
    }
    
    public function getEntity(){
        return $this->player;
    }
    
    public function getDamager(){
        return $this->damager;
    }
    
    public function setDamageEnabled($bool = true) {
      if( $bool == true ) {
        $this->bool = 0;
          }  else  {
            $this->bool = 1;
          }
    }
    
    public function getDamagerTeam(){
        return $this->tdn;
    }
    
    public function getEntityTeam(){
        return $this->tpn;
    }
}
