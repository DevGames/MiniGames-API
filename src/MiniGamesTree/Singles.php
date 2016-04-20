<?php

namespace MiniGamesTree;

class Singles {
    
    private $game = array("Game" <= array(),"Num"<=[]);

    public function addPlayer($name){
        $this->game{"Num"}[$name] = $this->getCount();
        return $this->game{"Game"}[$name] = $name;
    }
    
    public function RemovePlayer($name){
        unset($this->game{"Game"}[$name]);
        unset($this->game{"Num"}[$name]);
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
    
    public function getNumber($name){
        return $this->game{"Num"}[$name];
    }
    
    public function getScore(){
        $a = new Score\PlayerScore();
        return $a; 
    }
    
}
