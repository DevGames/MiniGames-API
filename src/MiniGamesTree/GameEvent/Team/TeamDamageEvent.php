<?php

namespace MiniGamesTree/GameEvent/Team;

use pocketmine\event\Cancellable;

class TeamDamageEvent implements Cancellable{

    private $player;
    private $damager;
    private $bool;
    
    public function __construct($player , $damager , $bool){
        $this->player = $player;
        $this->damager = $damager;
        $this->bool = $bool;
    }
    
    public function getEntity(){
        return $this->player;
    }
    
    public function getDamager(){
        return $this->player;
    }
    
    public function setDamageEnabled($bool = true) {
      if( $bool == true ) {
        $this->bool = 0;
          }  else  {
            $this->bool = 1;
          }
    }
}
