<?php

namespace MiniGamesTree\API;

class game extends \MiniGamesTree\extendss\info{
   
    public static function getInfo(){
    return $this;
    }
    
    public static function getTime(){
    $a = new \MiniGamesTree\Time();
    return $a;
    }
    
    public static function getMode(){
    $a = new \MiniGamesTree\Status();
    return $a;
    }
    
    public static function getGame(){
    $a = new GameAPI();
    return $a;
    }
    
}
class GameAPI {
    
    // private $use = array();

    public function getTeam($teamname,$name_player){ # Like CTF
    $a = new \MiniGamesTree\Team($teamname,$name_player);
    return $a;
    }
    
    public function getSingles($name_player){ # Like SG
    $a = new \MiniGamesTree\Singles($name_player);
    return $a;
    }
    
}
