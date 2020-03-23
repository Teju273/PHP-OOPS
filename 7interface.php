<?php

include "8shapeInterface.php";
include "9geometryInterface.php";

class Triangle implements shapeInterface, geometryInterface
{
    public function getArea()
    {
        echo 'Triangle Area <br>';
    }

    public function getCircumference($length, $breadth)
    {
        echo 'Success <br>';
    }
}

class Rectangle implements shapeInterface
{
    public function getArea()
    {
        echo 'Rectangle Area';
    }
}
$tri = new Triangle;
echo $tri->getArea();
echo $tri->getCircumference(2,5);

$rec = new Rectangle;
echo $rec->getArea();
