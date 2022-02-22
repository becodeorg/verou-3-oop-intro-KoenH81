<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.*/
require './Beverage.php';

class Beer extends Beverage{
/*TODO: Make all properties protected.*/
    protected string $name;
    protected float $alcoholpercentage;
    public function __construct(string $name, string $color, float $price, string $temperature, float $alcoholpercentage){ 
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
        parent::__construct($color, $price, $temperature = 'cold');
    }
    public function getAlcoholpecentage(){
        return $this->alcoholpercentage;
    }
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
}
$duvel = new Beer('Duvel', 'blond', 3.5, 'cold', 8.5);
/*TODO: Make all the other prints work without error without changing the beverage class.*/
echo $duvel->getAlcoholpecentage().'<br>';
echo $duvel->getName().'<br>';
echo $duvel->getColor().'<br>';
/*
USE TYPEHINTING EVERYWHERE!
*/