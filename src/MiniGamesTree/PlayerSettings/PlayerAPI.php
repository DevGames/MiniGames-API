<?php
namespace MiniGamesTree\PlayerSettings;

use MiniGamesTree\PlayerGames;

use MiniGamesTree\Status;

use MiniGamesTree\Time;

use MiniGamesTree\Teams;

class PlayerAPI{
    
    private $g;

    private $s;
    
    private $t;
    
    private $Time;

    public function getPlayerAPI(){
    $this->g = new PlayerGames();
    return $this->g;
    }
    
    public function getModeAPI(){
    $this->s = new Status();
    return $this->s;
    }
    
    public function getTimeAPI(){
    $this->Time = new Time();
    return $this->Time;
    }
    
    public function getTeamAPI(){
    $this->t = new Teams();
    return $this->t;
    }
    
}
