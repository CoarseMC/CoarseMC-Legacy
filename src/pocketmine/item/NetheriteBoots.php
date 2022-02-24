<?php

namespace pocketmine\item;

class NetheriteBoots extends Armor{

    const SLOT_NUMBER = 3;

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_BOOTS, $meta, $count, "Netherite Boots");
    }

    public function getMaxDurability()
    {
        return 482;
    }
}
