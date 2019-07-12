<?php
namespace Model\Vocation;

class Archer implements Vocation
{
    public function getHealthRegen() {
        return 3;
    }

    public function getMaxHealth($level) {
        return $level * 25;
    }

    public function getMaxMana($level) {
        return $level * 25;
    }

    public function __toString()
    {
        return "Archer";
    }
}