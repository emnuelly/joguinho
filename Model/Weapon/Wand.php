<?php
namespace Model\Weapon;

use Model\Vocation\Mage;

class Wand implements Weapon
{
    private $name, $price, $weaponVocation;

    public function __construct()
    {
        $this->name = "Wand";
        $this->price = 180;
        $this->weaponVocation = Mage::class;

    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getVocation()
    {
        return $this->vocation;
    }

    public function addPowerDamage()
    {

    }

    public function calculatePowerDamage()
    {

    }

    public function __toString()
    {
        return "<b>Weapon: </b>" . $this->getName() . "<br>"
            . "<b>Price: </b>" . $this->getPrice() . "<br>"
            . "<b>Vocation: </b>" . $this->getVocation() . "<br>";
    }
}