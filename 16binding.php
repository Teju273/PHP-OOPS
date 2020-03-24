<?php

class Book{
    public static $name = 'Sarthak';
    public static function author()
    {
        return "The author name is: ".self::$name;
    }
    public static function getAuthor()
    {
        echo static::author();
    }
   }

class newBook extends Book
{
    public static function author()
    {
        return "The authors name are: ".self::$name." and Ankur";
    }
}

Book::getAuthor();
echo "<br>";
newBook::getAuthor();
