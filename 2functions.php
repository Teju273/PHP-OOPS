<?php

class Student
{
    //properties
    public $name;
    public $attandence;
    public $totalMarks;

    //methods
    public function StuDetails($name, $attandence, $totalMarks)
    {
        $this->name = $name;
        $this->attandence = $attandence;
        $this->totalMarks = $totalMarks;
    } 

    public function get_name() {
        return $this->name;
      }

      public function get_totalMarks() {
        return $this->totalMarks;
      }

}

$class10 = new Student();
$class10->StuDetails('Darshan', False, 99);
echo $class10->name . '<br>';
echo $class10->totalMarks=80 . '<br>';
echo $class10->get_name() . '<br>';
echo $class10->get_totalMarks() . '<br>';

//to check if an object belongs to a specific class
var_dump($class10 instanceof Student);

?>