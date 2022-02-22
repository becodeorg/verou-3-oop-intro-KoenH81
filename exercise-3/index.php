<?php

declare(strict_types=1);
require './Beverage.php';

/* EXERCISE 3*/
/*TODO: Copy the code of exercise 2 to here and delete everything related to cola.*/
class Beer extends Beverage{
/*TODO: Make all properties private.*/
        private string $name;
        private float $alcoholpercentage;
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
/*TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.*/
        private function beerInfo(){
            return 'Hi, I\'m ' . $this->name . ' and have an alcohol percentage of ' . $this->alcoholpercentage . ' and I have a ' . $this->color . ' color.';
        }
        public function beerInfoPublic(){
            return $this->beerInfo();
        }
    }
    $duvel = new Beer('Duvel', 'blond', 3.5, 'cold', 8.5);
/*TODO: Make all the other prints work without error.*/      
    echo $duvel->getAlcoholpecentage().'<br>';
    echo $duvel->getName().'<br>';
    echo $duvel->getColor().'<br>';
    /*TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).*/
    $duvel->color = 'light';
    echo $duvel->getColor().'<br>';
/*TODO: Print this method on the screen on a new line.*/
    echo $duvel->beerInfoPublic();
/*
USE TYPEHINTING EVERYWHERE!
*/