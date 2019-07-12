<?php
namespace Model\Vocation;

use Model\Weapon\Wand;

class Mage implements Vocation
{
    public function getHealthRegen() {
        return 3;
    }

    public function getMaxHealth($level) {
        return $level * 20;
    }

    public function getMaxMana($level) {
        return $level * 60;
    }

    public function __toString()
    {
        return "Mage";
    }


}