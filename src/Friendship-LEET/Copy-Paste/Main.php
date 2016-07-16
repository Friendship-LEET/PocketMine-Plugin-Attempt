<?php

namespace mcunderground\example;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
     public function onEnable(){ 
          $this->getServer()->getPluginManager()->registerEvents($this,$this); 
          $this->getLogger()->info("Copy-Paste Plugin Has Been Enabled."); 
     }
     public function onJoin(PlayerJoinEvent $event){ // when player joins
          $player = $event->getPlayer(); // get player 
          $name = $player->getName(); // get players 
          $this->getServer()->broadcastMessage(TextFormat::YELLOW."$name joined server."); 
          // broadcast message to everyone when player joins in yellow
          $player->sendMessage(TextFormat::GREEN."Welcome to server, please read rules.");
          // sends message to player who joined. In green color
              
     }
 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
switch($command->getName()){
// we are gonna use switch... There are more ways. 

case "broadcast": // if commands name is broadcast
$sender->getServer()->broadcastMessage(TextFormat::BLUE."[Leet.CC] ".implode(" ", $args));

return true;
}
}    
}
?>
