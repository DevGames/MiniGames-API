<?php

namespace MiniGamesTree\API;

class game extends \MiniGamesTree\extendss\info{
   
    public function getInfo(){
    return $this;
    }
    
    public function getGame(){
    return new GameAPI();
    }
    
}
class GameAPI {
    
    // private $use = array();

    public function getTeam(){ # Like CTF
    return new \MiniGamesTree\Team();
    }
    
    public function getSingles(){ # Like SG
    return new \MiniGamesTree\Singles();
    }
    
}
