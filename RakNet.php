<?php
declare(strict_types=1);
namespace Frago9876543210\PocketEditionClient {
	use Frago9876543210\PocketEditionClient\protocol\PacketPool;
	use pocketmine\entity\Attribute;
	require_once "vendor/autoload.php";
	ini_set("memory_limit", "-1");
	RakNetPool::init();
	PacketPool::init();
	Attribute::init();
	echo "[!] IP: ";
	$ip = substr(fgets(STDIN),0,-1);
	echo "\n[!] PORT: ";
	$port = (int) fgets(STDIN);
	$client = new PocketEditionClient(new Address("0.0.0.0",mt_rand(10000,60000)), new Address($ip,$port));
	$client->sendOpenConnectionRequest1();
	while(true){
		$client->tick();
	}
}
