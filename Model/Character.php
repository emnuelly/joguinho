<?php
namespace Model;

use Model\Vocation\Vocation;
use Model\Weapon\Weapon;

class Character
{
    private $name;
    private $gender;
    private $vocation;
    private $experience;
    private $currentHealth;
    private $currentMana;
    private $deaths;
    private $monstersKilled;
    private $money;
    private $equips = array();

    public function __construct($name, $gender, Vocation $vocation)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->experience = 0;
        $this->currentHealth = 120;
        $this->currentMana = 20;
        $this->deaths = 0;
        $this->monstersKilled = 0;
        $this->money = 0;
        $this->vocation = $vocation;
    }

    public function getExperience() {
        return $this->experience;
    }
    public function addExperience($value) {
        $this->experience += $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLevel()
    {
        return floor($this->experience/100) + 1;
    }

    public function getMaxHealth()
    {
        return 120 + $this->vocation->getMaxHealth($this->getLevel());
    }
    public function getMaxMana()
    {
        return 20 + $this->vocation->getMaxMana($this->getLevel());
    }

    public function getMoney ()
    {
        return $this->money;
    }

    public function addMoney ($value)
    {
        $this->money += $value;
    }

    public function getHealthRegen()
    {

    }

    public function buyWeapon(Weapon $weapon)
    {
        if ($this->money >= $weapon->getPrice()) {
            $this->money -= $weapon->getPrice();
            $this->equips[] = $weapon->getName();
            return "Arma comprada!";
        } else {
            return "Dinheiro insuficiente!";
        }
    }

    public function equipWeapon ($weapon) {
        if (in_array($weapon, $this->equips)) {
            echo "A " . $weapon . " foi equipada.";
        } else {
            echo "Não é possível equipar essa arma!";
        }
    }

    public function __toString()
    {
        return "<b>Player:</b> ".$this->getName()." ({$this->vocation})<br />".
        "<b>Level: </b>".$this->getLevel()."<br />".
            "<b>Health: </b>".$this->currentHealth."/".$this->getMaxHealth()."<br />".
            "<b>Mana: </b>".$this->currentMana."/".$this->getMaxMana()."<br />" .
            "<b>Backpack: </b>" . implode(", ", $this->equips);
    }


}