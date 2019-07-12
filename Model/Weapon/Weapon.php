<?php
namespace Model\Weapon;

interface Weapon
{
    //Construtor
    public function __construct();

    //Getters
    public function getName();

    public function getPrice();

    public function getVocation();

    //Calcula o dano causado
   public function calculatePowerDamage();

   //Adiciona poder de ataque
   public function addPowerDamage();

   //Imprimir
    public function __toString();

}