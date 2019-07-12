<?php
namespace Model\Weapon;

use Model\Vocation\Knight;

class Sword implements Weapon
{
    private $name, $price, $vocation;

    public function __construct()
    {
        $this->name = "Sword";
        $this->price = 200;
        $this->vocation = Knight::class;

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
