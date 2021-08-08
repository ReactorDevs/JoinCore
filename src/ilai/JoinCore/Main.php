<?php

declare(strict_types=1);

namespace ilai\JoinCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
# use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\player\PlayerJoinEvent;


// Class main and implementing event listener
class Main extends PluginBase implements Listener{
  
  
  public function onEnable(){
    // Event register 
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  // When a player joins
  public function onJoin(PlayerJoinEvent $e){
    // Player object
    $player = $e->getPlayer();
    // Player Name
    $playerName = $player->getName();
    
    // Message Sender
    $player->sendMessage("----". C::YELLOW ."Star Network". C::RESET ."----")
    $player->sendMessage("Hi". C::GREEN ."{$playerName}". C::RESET ."! Welcome to Star Network")    
  }
  
}
