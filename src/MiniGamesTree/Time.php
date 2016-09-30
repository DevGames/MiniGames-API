<?php

namespace MiniGamesTree;

use pocketmine\scheduler\PluginTask;

class Time extends \pocketmine\plugin\PluginBase {
  
  private $api;
  
  private $Time = 0;
  
  private static $speed = 20;
  
  private $move = "-";
  
  private $moveperiod = 1;

  public function getSec(){
    return $this->Time;
  }
	
  public function getMinute(){
    return !is_int($this->Time) ?  : round($this->Time / 60);
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
    return self::$speed = $amount * (2);
  }
  
  public function setTimeMove($move = "-"){
    if($move == "-"){
      $this->move = "-";
    }
    if($move == "+"){
      $this->move = "+";
    }
  }
  
  /*
  public function sendPopup($player,$msg = "none",$time = 2){
  	$i = 0;
  	do{
  	$i++;
  	$player->sendPopup($msg);
  	} while ($i = $time * 100 / 2);
  }
   * 
   */
  
  public function getMove(){
      return $this->move;
  }
  
  public function getSpeed(){
      return self::$speed;
  }
  
  public function onEnable() {

      $this->getServer()->getPluginManager()->registerEvents(new Event($this), $this);
      
      $api = new \MiniGamesTree\API\game;
      $this->api = $api;
      $this->getLogger()->info(\pocketmine\utils\TextFormat::GREEN.$this->getDescription()->getName()." IS Worked".PHP_EOL."Version : ".$this->getDescription()->getVersion());
      
      $this->getServer()->getScheduler()->scheduleRepeatingTask(new Run ( $this ), self::$speed);
      
      if($this->getDescription()->getVersion() !== $api->getInfo("version")->getInfo() || $this->getDescription()->getAuthors()[0] !== $api->getInfo("name")->getInfo()){
      	$this->getServer()->getPluginManager()->disablePlugin($this->getServer()->getPluginManager()->getPlugin($this->getDescription()->getName()));
      }
      
      
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
