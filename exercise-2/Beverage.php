<?php
class Beverage{
/*TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct 
  TODO: Have a default value "cold" in the construct for temperature.*/
    public $color;
    public $price;
    public $temperature;

    public function __construct($color, $price, $temperature = 'cold'){
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