<?php
namespace Model\Vocation;

use Model\Weapon\Staff;

class Druid implements Vocation
{

    public function getHealthRegen()
    {
        return 3;
    }

    public function getMaxHealth($level)
    {
        return $level * 20;
    }

    public function getMaxMana($level)
    {
        return $level * 50;
    }

    public function buyWeapon(Staff $weapon)
    {
        if ($this->getMoney() >= $weapon->getPrice()){
            $this->money -= $weapon->getPrice();
            $this->equips[] = $weapon->getName();
            return "Arma comprada!";
        } else {
            return "Dinheiro insuficiente!";
        }
    }

    public function __toString()
    {
        return "Druid";
    }
}