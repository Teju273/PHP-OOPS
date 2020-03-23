<?php
class Fruit {
  public $name;
  public $color;

  //PHP will automatically call this function when we create an object from a class.
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  //PHP will automatically call this function at the end of the script.
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");


class Bill
{
    public $dinner = 20;
    public $desserts = 5;
    public $coldDrink = 3;
    public $bill;

    public function __construct()
    {
        $this->bill=4;
    }

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

    public function __destruct()
    {
        echo $this->bill . '<br>';
    }
}

$bill = new Bill();
$bill->dinner(2)->dessert(4)->coldDrink(2)->bill;
