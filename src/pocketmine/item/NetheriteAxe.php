<?php

namespace pocketmine\item;

class NetheriteAxe extends Tool{

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_AXE, $meta, $count, "Netherite Axe");
    }

    public function isAxe()
    {
        return Tool::TIER_NETHERITE;
    }
}
