<?php
namespace Model\Vocation;

use Model\Character;
use Model\Weapon\Weapon;

interface Vocation
{

    public function getHealthRegen();

    public function getMaxHealth($level);

    public function getMaxMana($level);

    public function __toString();

}