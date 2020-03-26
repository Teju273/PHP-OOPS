<?php

// include "20multiple_traits.php";

trait Laser
{
    public function power()
    {
        echo "5 mW";
    }
}

class Mobile
{
    public function battery()
    {
        echo 'I am battery <br>';
    }

    public function power()
    {
        echo "10 mW";
    }   
}

class Galaxy extends Mobile
{
    use Laser; 
}

$obj = new Galaxy;
$obj->battery();
$obj->power();
