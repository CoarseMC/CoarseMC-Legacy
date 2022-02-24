<?php

namespace pocketmine\item;

class NetheriteChestplate extends Armor{

    const SLOT_NUMBER = 1;

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_CHESTPLATE, $meta, $count, "Netherite Chestplate");
    }

    public function getMaxDurability()
    {
        return 593;
    }
}
