<?php

namespace HB;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener{

public function onEnable(){

$this->getServer()->getLogger()->info("Healthbar is up and ready to go! Made by SavionLegendZzz - Modified by FazeTheLight");
$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new Checker($this),10); 
}

public function onJoin(PlayerJoinEvent $event){
$player=$event->getPlayer();
$this->PurePerms = $this->getServer()->getPluginManager()->getPlugin("PurePerms");
        $group = $this->PurePerms->getUserDataMgr($player)->getGroup($player);
        $health = ($player->getHealth());
        $groupname = $group->getName();
if($this->getServer()->getPluginManager()->getPlugin("PurePerms") === null){
$player->setNameTag($player->getName()."\n".($player->getHealth() / $player->getMaxHealth() * 100)."% PP NOT INSTALLED");
}else{
	if($health === 20){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§2||||||||||");
	}
	if($health === 19){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§2||||||||||");
	}
	if($health === 18){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§2|||||||||§8|");
	}
	if($health === 17){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§a|||||||||§8|");
	}
	if($health === 16){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§a|||||||||§8||");
	}
	if($health === 15){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§a|||||||||§8||");
	}
	if($health === 14){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§e|||||||§8|||");
	}
	if($health === 13){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§e|||||||§8|||");
	}
	if($health === 12){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§e||||||§8||||");
	}
	if($health === 11){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§6||||||§8||||");
	}
	if($health === 10){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§6|||||§8|||||");
	}
        if($health === 9){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§6|||||§8|||||");
	}
	if($health === 8){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§c||||§8||||||");
	}
	if($health === 7){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§c||||§8||||||");
	}
	if($health === 6){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§c|||§8|||||||");
	}
	if($health === 5){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§4|||§8|||||||");
	}
	if($health === 4){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§4||§8||||||||");
	}
	if($health === 3){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§4|§8|||||||||");
	}
	if($health === 2){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§5|§8|||||||||");
	}
	if($health === 1){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§8||||||||||");
	}
	if($health === 0){
	$player->setNameTag("[".$groupname."]" .$player->getName()."\n§8||||||||||");
	}
}
}
}
