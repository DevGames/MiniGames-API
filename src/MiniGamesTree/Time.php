<?php

namespace MiniGamesTree;

use pocketmine\scheduler\PluginTask;

class Time extends \pocketmine\plugin\PluginBase {
  
  private $Time = 0;
  
  private static $speed = 20;
  
  private $move = "-";
  
  private $moveperiod = 1;

  public function getTime(){
    return $this->Time;
  }
  
  public function getMovePeriod(){
      return $this->moveperiod;
  }
  
  public function setMovePeriod($amount){
      return $this->moveperiod = $amount;
  }

  public function setTime($amount){
    return $this->Time = $amount + 1;
  }
  
  public function setSpeed($amount){
    return self::$speed = $amount * (1);
  }
  
  public function setTimeMove($move = "-"){
    if($move == "-"){
      $this->move = "-";
    }
    if($move == "+"){
      $this->move = "+";
    }
  }
  
    public function onEnable() {

      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      
      $api = new \MiniGamesTree\API\game;
      
      $this->getLogger()->info(\pocketmine\utils\TextFormat::GREEN.$api->getInfo()->getAPIName()."IS Worked".PHP_EOL."Version : ".$api->getInfo()->getVersion());
      
      $this->getServer()->getScheduler()->scheduleRepeatingTask(new Run ( $this ), self::$speed);
      
  }
  
  public function getMove(){
      return $this->move;
  }
  
  public function getSpeed(){
      return self::$speed;
  }
}
class Run extends PluginTask{

        public $run;

	public function __construct(Time $run){
		parent::__construct($run);
                $this->run = $run;
	}
	
	public function onRun($currentTick){
           if($this->run->getMove() == "-"){
           $this->run->setTime($this->run->getTime() - $this->run->getMovePeriod());
           }
           if($this->run->getMove() == "+"){
           $this->run->setTime($this->run->getTime() + $this->run->getMovePeriod());
           }
        }
}
