<?php
namespace Model\Weapon;

use Model\Vocation\Archer;

class Bow implements Weapon
{
    private $name, $price, $vocation;

    public function __construct()
    {
        $this->name = "Bow";
        $this->price = 90;
        $this->vocation = Archer::class;

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