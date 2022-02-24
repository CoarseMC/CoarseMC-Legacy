<?php

namespace pocketmine\item;

class NetheriteLeggings extends Armor {

    const SLOT_NUMBER = 2;

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_LEGGINGS, $meta, $count, "Netherite Leggings");
    }

    public function getMaxDurability()
    {
        return 556;
    }
}
