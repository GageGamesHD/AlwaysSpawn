<?php

namespace GageGamesHD\AlwaysSpawn;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;

class Loader extends Plugin implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info(&c"Always Spawn By GageGamesHD has been enabled!");
	}

	public function onPlayerLogin(PlayerLoginEvent $event){
		$event->getPlayer()->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
	}

}
