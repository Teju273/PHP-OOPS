<?php

class Circle
{
    const pi = 3.14;
    public function area($radius)
    {
        return $radius * $radius * self::pi;
    }

    public function circumference($radius)
    {
        return 2 * self::pi * $radius;
    }
}

$circle = new Circle;
echo $circle -> area(5) . '<br>';
echo $circle -> circumference(5);
