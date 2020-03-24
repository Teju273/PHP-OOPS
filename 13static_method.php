<?php
class User
{
    static public function getName()
    {
        echo 'Sarthak <br>';
    }

    public function __construct()
    {
        self::getName();
    }
    }

// Calling static method
User::getName();

//Calling static method from a method in the same class using the self keyword
new User;


//2) To call a static method from a child class, use the parent keyword inside the child class.
class ParentClass {
  protected static function getWebsiteName() {
    return "www.github.com";
  } 
}

class ChildClass extends ParentClass {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$childclass = new ChildClass;
echo $childclass -> websiteName;
?>
