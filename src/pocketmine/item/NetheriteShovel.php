<?php

namespace pocketmine\item;

class NetheriteShovel extends Tool{

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_SHOVEL, $meta, $count, "Netherite Shovel");
    }

    public function isShovel()
    {
        return Tool::TIER_NETHERITE;
    }
}
