<?php
namespace MiniGamesTree;


class PlayerGames extends Base\ArrayBase{
    
        private $gscore;
    
        public function add($number,$player){
            
        $this->number++;
        
        $this->score[$player->getName()] = 0;
        
        $this->num[$player->getName()] = $this->number;
        
       return $this->pg
        {
        $number
        }=
        $player->getName();
    }
    
    public function remove($server,$number){
        
        $this->number--;
        
        unset($this->score[$this->getPlayerWithNumber($server,$number)->getName()]);
        
        unset($this->num[$this->getPlayerWithNumber($server,$number)->getName()]);
        
        unset($this->pg{
            $number       
                       });
    }
    
    public function RemoveAllPlayers($server){
    $this->number = 0;
    foreach($server->getOnlinePlayers() as $player):
    unset($this->score[$player->getName()]);
    unset($this->num[$player->getName()]);
    unset($this->pg[$this->getNumber($player)]);
    endforeach();
    }
    
    public function getAllPlayersInGame($server){
        foreach($this->pg as $p){
        return $server->getPlayer($p);
        }
    }
    
    public function getPlayerCount(){
        return count($this->pg);
   /*$c = 0;
    do{
        $c++;
        return $c;
    }while (($c <= count($this->pg)));
    */
    }
    
    public function getPlayerWithNumber($server,$number){
        return $server->getPlayer($this->pg{
       $number - 
        (1)});
    }
    
    public function isPlayerInGameWithNumber($number){
        return array_key_exists($number - 1, $this->pg);
    }

    public function getName($number){
    return $this->pg{$number -
    (1)
    )};}

    public function IsPlayerInGame($player){
        return in_array($player->getName(), $this->pg);
    }
    
    public function getAllPlayerName($glue = " , "){ // Like /list
        return implode($glue , $this->pg);
    }
    /*
    public function getNumber(){
        return fread(fopen("Number", "r"), filesize("Number"));
    }
   * 
   */
   public function getLastPlayerNumber(){
   return $this->number;
   }
   
    public function getNumber($player){
    return $this->num[$player->getName()];
    }
    
    public function getScore(){
    $this->gscore = new Score();
    return $this->gscore;
    }
 
}
class Score extends Base\ArrayBase{
    
    public function setPlayerScore($player,$score){
    return $this->score[$player->getName()] = $score;  // $this->setPlayerScore($this->getPlayerWithNumber($server,$number),$score);
    }
    
    public function getPlayerScore($player){
    return $this->score[$player->getName()];  // $this->getPlayerScore($player);
    }
    /*
    How Can Add Score !!
    $this->setScore($player,$this->getScore($player) + $score) || $this->setScore($player,$this->getScore($player) - $score)
    
    */
}
?>
