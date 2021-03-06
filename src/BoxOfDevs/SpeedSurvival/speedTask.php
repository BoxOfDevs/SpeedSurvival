<?php
namespace BoxOfDevs\SpeedSurvival; 

use pocketmine\server;
use pocketmine\scheduler\PluginTask;
use pocketmine\scheduler\Task;
use pocketmine\scheduler\ServerScheduler;
use pocketmine\event\Listener;
use pocketmine\entity\Effect;
use pocketmine\level\Level;
use pocketmine\block\Block;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;
use pocketmine\IPlayer;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

   class SpeedTask extends PluginTask  {
	private $plugin;
    public function __construct($plugin){
        parent::__construct($plugin);
		$this->p = $plugin;
	}
	public function onRun($tick) {
		foreach($this->p->getServer()->getOnlinePlayers() as $player) {
			$player->setSpeed(0.15);
			$e = Effect::getEffect(3);
			$e->setDuration(100);
			$e->setAmplifier(3);
			$e->setVisible(false);
			$player->addEffect($e);
		}
	}
   }