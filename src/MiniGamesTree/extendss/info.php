<?php

namespace MiniGamesTree\extendss;

class info {
   
   public static $info;
   
   public function __construct($info){
   self::$info = $info;
   }
   
   public function getInfo(){
      if(self::$info == null)return false;
      if(self::$info == "name")return "Nawaf1b";
      if(self::$info == "plugin")return "MiniGames-API";
      if(self::$info == "version")return "2.0.0";
   }
}
