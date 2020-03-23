<?php

abstract class Car
{
    function getName()
    {
        return 'I am a car';
    }

    abstract public function calculateTankArea();
}


//abstract class can only be extended
class BMW extends Car
{
    public function calculateTankArea()
    {

    }
}
