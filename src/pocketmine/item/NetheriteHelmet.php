<?php

namespace pocketmine\item;

class NetheriteHelmet extends Armor{

    const SLOT_NUMBER = 0;

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_HELMET, $meta, $count, "Netherite Helmet");
    }

    public function getMaxDurability()
    {
        return 408;
    }
}
