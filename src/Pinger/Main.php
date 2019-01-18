<?php

namespace Pinger;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

	public function onLoad() : void{
		$this->getLogger()->info(TextFormat::WHITE . "I've been loaded!");
	}

	public function onEnable() : void{
	
		$this->getLogger()->info(TextFormat::DARK_GREEN . "I've been enabled!");
	}

	public function onDisable() : void{
		$this->getLogger()->info(TextFormat::DARK_RED . "I've been disabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "ping":
				$sender->sendMessage("Your ping is " . $sender->getPing() . "ms !");

				return true;

			
			default:
				return false;
		}
	}
}
?>
