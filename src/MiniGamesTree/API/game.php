<?php

namespace MiniGamesTree\API;

class game {
    
    public static function getGame(){
    $a = new GameAPI();
    return $a;
    }
    
}
class GameAPI {
    
    // private $use = array();

    public function getTeam($teamname = "none",$name_player = "getPlayer.Name"){ # Like CTF
    $a = new \MiniGamesTree\Team($teamname,$name_player);
    return $a;
    }
    
    public static function getTime(){
    $a = new \MiniGamesTree\Time();
    return $a;
    }
    
    public static function getMode(){
    $a = new \MiniGamesTree\Status();
    return $a;
    }
    
    public function getSingles($name_player = "getPlayer.Name"){ # Like SG
    $a = new \MiniGamesTree\Singles($name_player);
    return $a;
    }
    
}
