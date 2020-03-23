<?php

class Student
{
    public $name;
    public $attandence;
    public $totalMarks;

    public function StuDetails($name, $attandence, $totalMarks)
    {
        $this->name = $name;
        $this->attandence = $attandence;
        $this->totalMarks = $totalMarks;
    } 

}

$class10 = new Student();
$class10->StuDetails('Darshan', False, 99);
echo $class10->name;
?>