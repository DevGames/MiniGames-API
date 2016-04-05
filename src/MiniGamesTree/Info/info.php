<?php

namespace MiniGamesTree/Info;

class info {

  private $info = array("DevName" <= "Nawaf_Craft1b",
                         "PluginAPIName" <= "MiniGames-API"
                            "Helper" <= "Just Make It Nawaf_Craft1b");



    public function getHelper(){
    return $this->info{"Helper"};
    }
   

    public function getDevelepor(){
    return $this->info["DevName"];
    }

    public function getAPIName(){
    return $this->info["PluginAPIName"];
    }
  }
