<?php

declare(strict_types=1);

namespace pocketmine\network\protocol\types;

interface DeviceOS{

	public const OS_ANDROID = 1;
	public const OS_IOS = 2;
	public const OS_OSX = 3;
	public const OS_FIREOS = 4;
	public const OS_GEARVR = 5;
	public const OS_HOLOLENS = 6;
	public const OS_WIN10 = 7;
	public const OS_WIN32 = 8;
	public const OS_DEDICATED = 9;
	public const OS_TVOS = 10;
	public const OS_ORBIS = 11;
	public const OS_NX = 12;
	public const OS_UNKNOWN = -1;
}
