<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\entity;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\level\format\FullChunk;
use pocketmine\level\Location;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\Compound;
use pocketmine\network\multiversion\MultiversionEnums;
use pocketmine\Player;

class EnderPearl extends Projectile {
    const NETWORK_ID = 87;

    public $width = 0.25;
    public $length = 0.25;
    public $height = 0.25;

    protected $gravity = 0.03;
    protected $drag = 0.01;

    public function __construct(FullChunk $chunk, Compound $nbt, Entity $shootingEntity = null){
        parent::__construct($chunk, $nbt, $shootingEntity);
    }

   public function onUpdate($currentTick)
   {
       $owner = $this->shootingEntity;
       if ($this->isOnGround()) {
           if ($owner instanceof Player) {

               $owner->teleport(new Vector3($this->getX(), $this->getY() - 0.8, $this->getZ())); //the getY is +1
               $owner->getLevel()->addSound(new EndermanTeleportSound(new Vector3($owner->getX(), $owner->getY(), $owner->getZ())));

               $this->close(); //it doesn't despawn by default
           }
       }

       return parent::onUpdate($currentTick);
   }
}