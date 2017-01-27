<?php
namespace BoxOfDevs\SpeedSurvival; 
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use  BoxOfDevs\SpeedSurvival\speedTask; 
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
 use pocketmine\Player;
 use pocketmine\event\block\BlockBreakEvent;
 use pocketmine\block\Block;
 use pocketmine\item\Item;
use pocketmine\scheduler\PluginTask;
use pocketmine\scheduler\ServerScheduler;


class Main extends PluginBase implements Listener{
public function onEnable(){
$this->reloadConfig();
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getServer()->getScheduler()->scheduleRepeatingTask(new  speedTask($this), 100);
 }
public function onLoad(){
$this->reloadConfig();
$this->saveDefaultConfig();
}
public function onBreak(BlockBreakEvent $event) {
	$block = $event->getItem();
	switch($block->getId()) {
		case 16:
		$drops = [50];
		return true;
		break;
		case 15:
		$drops = [265];
		return true;
		break;
		case 14:
		$drops = [266];
		return true;
		break;
		case 73:
		case 74:
		$drops = [152];
		return true;
		break;
		case 129:
		case 153:
		$drops = [384, 384, 384];
		return true;
		break;
		case 21:
		$drops = [22];
		return true;
		break;
		case 12:
		$drops = [20];
		return true;
		break;
		default:
		$drops = $event->getDrops();
		return true;
		break;
	}
	$event->setDrops($drops);
}
 public function onCommand(CommandSender $issuer, Command $cmd, $label, array $params){
switch($cmd->getName()){
}
return false;
 }
}