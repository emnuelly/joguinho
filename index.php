<?php
require_once "autoload.php";

use Model\Character;
use Model\Vocation\Archer;
use Model\Vocation\Druid;
use Model\Vocation\Knight;
use Model\Weapon\Dagger;
use Model\Weapon\Staff;
use Model\Weapon\Sword;
use Model\Weapon\Wand;

// Cria Character
$xablau = new Character("Xablau", "M", new Druid());
$uoxiton = new Character("Uoxiton", "M", new Knight());


$xablau->addMoney(1000);

$xablau->buyWeapon(new Sword());
$xablau->buyWeapon(new Staff());

$xablau->equipWeapon("Staff");
echo "<br>";
$xablau->equipWeapon("Wand");
echo "<br>";

echo $xablau;



