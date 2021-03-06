<?php

namespace pocketmine\network\protocol;

use pocketmine\mods\Addon;
use pocketmine\mods\ResourcePack;

class ResourcePacksInfoPacket extends PEPacket {

	const NETWORK_ID = Info::RESOURCE_PACKS_INFO_PACKET;
	const PACKET_NAME = "RESOURCE_PACKS_INFO_PACKET";

	/** @var boolean */
	public $isRequired = false;
	public $hasScripts = false;
	/** @var Addon[] */
	public $addons = [];
	/** @var ResourcePack[] */
	public $resourcePacks = [];
	
	// read
	public function decode($playerProtocol) {
		
	}
	
	// write
	public function encode($playerProtocol) {
		$this->reset($playerProtocol);
		$this->putByte($this->isRequired);
		$this->putByte($this->hasScripts);
		if ($playerProtocol >= Info::PROTOCOL_448) {
			$this->putByte(0);
		}
		$this->putLShort(count($this->addons));
		foreach ($this->addons as $addon) {
			$this->putString($addon->id);
			$this->putString($addon->version);
			$this->putLLong($addon->size);
			$this->putString($addon->contentKey);
			$this->putString($addon->subPackName);
			$this->putString(''); // content identity
			$this->putByte(0); // has scripts
		}
		$this->putLShort(count($this->resourcePacks));
		foreach ($this->resourcePacks as $resourcePack) {
			$this->putString($resourcePack->getPackId());
			$this->putString($resourcePack->getPackVersion());
			$this->putLLong($resourcePack->getPackSize());
			$this->putString($resourcePack->getSha256());
			$this->putString($resourcePack->getPackName());
			$this->putString(''); // content identity
			$this->putByte(0); // has scripts
			if ($playerProtocol >= Info::PROTOCOL_422) {
				$this->putByte(0); //rtx
			}
		}		
	}

}
