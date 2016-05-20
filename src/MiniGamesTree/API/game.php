<?php

namespace MiniGamesTree\API;

class game extends \MiniGamesTree\extendss\info {
    
    public static function getGame(){
    $a = new GameAPI();
    return $a;
    }
    
    public function getInfo(){
    return $this;
    }
    
}
class GameAPI {
    
    // private $use = array();

    public function getTeam($teamname = "none",$name_player = "getPlayer.Name"){ # Like CTF
    $a = new \MiniGamesTree\Team($teamname,$name_player);
    return $a;
    }
    
    public function getTime(){
    $a = new \MiniGamesTree\Time();
    return $a;
    }
    
    public function getMode(){
    $a = new \MiniGamesTree\Status();
    return $a;
    }
    
    public function getSingles($name_player = "getPlayer.Name"){ # Like SG
    $a = new \MiniGamesTree\Singles($name_player);
    return $a;
    }
    
}
