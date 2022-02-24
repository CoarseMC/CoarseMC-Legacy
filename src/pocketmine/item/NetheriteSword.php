<?php

namespace pocketmine\item;

class NetheriteSword extends Tool{

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_SWORD, $meta, $count, "Netherite Sword");
    }

    public function isSword()
    {
        return Tool::TIER_NETHERITE;
    }
}
