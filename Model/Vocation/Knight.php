<?php
namespace Model\Vocation;

class Knight implements Vocation
{
    public function getHealthRegen() {
        return 3;
    }

    public function getMaxHealth($level) {
        return $level * 50;
    }

    public function getMaxMana($level) {
        return $level * 10;
    }

    public function __toString()
    {
        return "Knight";
    }
}