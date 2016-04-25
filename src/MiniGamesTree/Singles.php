<?php

namespace MiniGamesTree;

class Singles {
    
    private $usn;
    private $game = array("Game" <= array(),"Num"<=[]);

       public function __construct($usn){
		$this->usn = $usn;
	   }
	   
    public function addPlayer(){
        $this->game{"Num"}[$this->usn] = $this->getCount();
        return $this->game{"Game"}[$this->usn] = $this->usn;
    }
    
    public function RemovePlayer(){
        unset($this->game{"Game"}[$this->usn]);
        unset($this->game{"Num"}[$this->usn]);
    }
    
    public function isPlayer($name){
        return in_array($name, $this->game["Game"]);
    }
    
    public function getPlayers(\pocketmine\Server $server){
    foreach ($this->game["Game"] as $p):
    return $server->getPlayer($p);
    endforeach;
    }
    
    public function getCount(){
        return count($this->game["Game"]);
    }
    
    public function ListPlayer($glue = " .*. "){
        return join($glue, $this->game);
    }
    
    public function getNumber($this->usn){
        return $this->game{"Num"}[$this->usn];
    }
    
    public function getScore(){
        $a = new Score\PlayerScore();
        return $a; 
    }
    
}
