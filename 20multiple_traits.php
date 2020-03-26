<?php

include "19traits.php";

trait Projector
{
    public function range()
    {
        echo "2 mW";
    }

    public function power()
    {
        echo "I am the power of Projector";
    }
}

class Galaxy1
{
    use Projector; 
}


$obj = new Galaxy1;
$obj->range();  