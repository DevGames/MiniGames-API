<?php

namespace MiniGamesTree\Console;

use pocketmine\plugin\PluginBase;
use MiniGamesTree\Base\ArrayBase;

class Logger extends PluginBase { 

    const Name = "MiniGamesBase";
    
    public $Time;
    
    public $base;

    public function onEnable() {
        $this->base = new \MiniGamesTree\Base\ArrayBase();
        $this->Time = $this->base->Time;
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Run\RT($this), $this->base->speed);
        $this->getLogger()->info(\pocketmine\utils\TextFormat::GREEN.self::Name . " IS Worked");
		if(!self::$get instanceof \MiniGamesTree\PlayerSettings\PlayerAPI){
			ArrayBase::$get = $this;
		}
    }
}
?>
