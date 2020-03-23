<?php

//Parent class
/*since setName() function is common for both the classess,
declaring them in a parent class and extending*/
class Fruit
{
    public $name;

    public function setName($name)
    {
        $this->name=$name;
    }
}

//Child class
class Apple extends Fruit
{
    public function Juice()
    {
        echo 'Apple juice';
    }
}

$apple = new Apple;
$apple->setName('My Apple');
echo $apple->name . '<br>';
echo $apple->Juice() . '<br>';

//Child class
class Mango extends Fruit
{

}

$mango = new Mango;
$mango->setName('My Mango');
echo $mango->name;
