<?php

class Bill
{
    public $dinner = 20;
    public $desserts = 5;
    public $coldDrink = 3;
    public $bill;

    public function dinner($person)
    {
        $this->bill += $this->dinner * $person;
        return $this;
    }

    public function dessert($person)
    {
        $this->bill += $this->desserts * $person;
        return $this;
    }

    public function coldDrink($person)
    {
        $this->bill += $this->coldDrink * $person;
        return $this;
    }

}

$bill = new Bill();
echo $bill->dinner(2)->dessert(4)->coldDrink(2)->bill;