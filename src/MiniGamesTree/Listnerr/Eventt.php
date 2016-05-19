<?php

namespace Listenerr\Eventt; # Fixed

use pocketmine\event\Listener; 
use MiniGamesTree\Time as Main;
use pocketmine\event\entity\EntityDamageEvent as Damage;

class Eventt implements Listener {

    private $main;
    
    public function __construct(Main $a) {
        $this->main = $a;
    }
    
    public function onDamage(Damage $event){
     if ($event instanceof EntityDamageByEntityEvent) {
            if ($event->getEntity() instanceof Player) {
    if( $this->main->api->getGame()->getTeam("",$event->getEntity()->getName())->getTeam() == $this->main->api->getGame()->getTeam("",$event->getDamager()->getName())->getTeam() ) {
    $event->setCancelled(true);
     }
    }
  }
    }
    
}
