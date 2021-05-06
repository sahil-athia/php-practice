<?php

// strings
$x = "Hello world!";
$y = 'Hello world!';

echo $x . "\n";
echo $y . "\n";

// integer
$x = 5985;

// var dump returns data type and value
var_dump($x) . "\n";

// float
// a number with a decimal

$flt = 10.453;

var_dump($flt) . "\n";


// boolean

$t = true;
$f = false;

var_dump($t) . "\n";
var_dump($f) . "\n";

// array

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

// class and object

class Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "This car is a " . $this->color . " " . $this->model . "! \n";
  }
}

$myCar = new Car("white", "Toyota");
echo $myCar -> message();

$myOtherCar = new Car("blue", "honda");
echo $myOtherCar -> message();


// php null 

$x = "Hello world!";
$x = null;
var_dump($x);
?>