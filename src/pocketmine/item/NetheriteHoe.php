<?php

namespace pocketmine\item;

class NetheriteHoe extends Tool{

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::NETHERITE_HOE, $meta, $count, "Netherite Hoe");
    }

    public function isHoe()
    {
        return Tool::TIER_NETHERITE;
    }
}
