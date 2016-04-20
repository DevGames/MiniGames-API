<?php

namespace MiniGamesTree\API;

class game extends \MiniGamesTree\extendss\info{
   
    public function getInfo(){
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

    public function getTeam(){ # Like CTF
    $a = new \MiniGamesTree\Team();
    return $a;
    }
    
    public function getSingles(){ # Like SG
    $a = new \MiniGamesTree\Singles();
    return $a;
    }
    
}
