<?php
namespace Model\Weapon;

use Model\Vocation\Druid;

class Dagger implements Weapon
{
    private $name, $price, $vocation;

    public function __construct()
    {
        $this->name = "Dagger";
        $this->price = 50;
        $this->vocation = Druid::class;

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
        return "<b>Weapon: </b>" .$this->getName(). "<br>"
            . "<b>Price: </b>" . $this->getPrice(). "<br>"
            . "<b>Vocation: </b>" . $this->getVocation() . "<br>";
    }
}
