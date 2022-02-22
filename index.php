<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.*/
class beverage{
/*TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct 
  TODO: Have a default value "cold" in the construct for temperature.*/
    public string $color;
    public float $price;
    public string $temperature = 'cold';

    function __construct($color, $price, $temperature){
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    /*TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."*/
    function getInfo(){
        echo 'This beverage is '. $this->temperature . ' and ' . $this->color . '.';
    }
    /*TODO: Print the temperature on the dcreen*/
    function printTemp(){
        print $this->temperature;
    }
}
/*TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically*/
$cola = new beverage('black', 2.0, 'cold');
/*print the getInfo on the screen.*/
$cola -> getInfo();
/*TODO: Print the temperature on the screen.*/
echo '<br>' . $cola -> temperature;


/*
USE TYPEHINTING EVERYWHERE!
*/