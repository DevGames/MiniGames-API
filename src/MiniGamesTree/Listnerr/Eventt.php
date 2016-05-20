<?php

namespace MiniGamesTree\Listenerr; # Closed This Class

use pocketmine\event\Listener; 
use MiniGamesTree\Time as Main;
use pocketmine\event\entity\EntityDamageEvent as Damage;

class Eventt implements Listener {

    private $main;
    
    public function __construct(Main $a) {
        $this->main = $a;
    }
    
    public function onDamage(Damage $event){
        
        $b = 0;
        
     if ($event instanceof EntityDamageByEntityEvent) {
         
    if ($event->getEntity() instanceof Player) {
        
    if( $this->main->api->getGame()->getTeam("",$event->getEntity()->getName())->getTeam() 
    == $this->main->api->getGame()->getTeam("",$event->getDamager()->getName())->getTeam() ) {
        
        if( $b == ( 0 ) ){
        
    $event->setCancelled(true);
    
     }
     
    $this->main->getServer()->getPluginManager()->callEvent(new \MiniGamesTree\GameEvent\Team\TeamDamageEvent($event->getEntity(), $event->getDamager(), $b , $this->main->api->getGame()->getTeam("",$event->getDamager()->getName())->getTeam() , $this->main->api->getGame()->getTeam("",$event->getEntity()->getName())->getTeam()));
    
    }
  }
}
    
}
