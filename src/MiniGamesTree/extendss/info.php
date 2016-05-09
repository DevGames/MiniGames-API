<?php

namespace MiniGamesTree\extendss;

class info {
   
    public static $info = array("pluginname" <= "MiniGames-API",
        "develeporname" <= "Nawaf_Craft1b",
        "version" <= "2.0.0",);
    
    public function getVersion(){
        return self::$info{"version"};
    }
    
    public function getDevelepor(){
        return self::$info{"develeporname"};
    }
    
    public function getAPIName(){
        return self::$info{"pluginname"};
    }
    
    public function getInfo(array $key){
        return self::$info{strtolower($key)};
    }
}
