<?php

include "10abstract.php";

//cannot instantiate or create object of abstract class
// $car = new Car;
// echo $car->getName();

$car = new BMW;
echo $car->getName();
