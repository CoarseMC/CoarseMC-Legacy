<?php

namespace pocketmine\item;

class NetheritePickaxe extends Tool{

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::TIER_NETHERITE, $meta, $count, "Netherite Pickaxe");
    }

    public function isPickaxe()
    {
        return Tool::TIER_NETHERITE;
    }
}
