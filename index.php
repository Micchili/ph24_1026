<?php
require_once 'Car.class.php';
$car = new Car("a","b","c");
echo $car->getColor();
echo $car->getType();
echo $car->getNumber();
// $car->setColor("東海道五十三次");
// $car->drive();
// echo $car->getColor();
