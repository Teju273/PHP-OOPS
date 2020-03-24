<?php
class Book
{
    public static $name = 'Sarthak';

    public function author()
    {
        return 'The author name is ' . $this->name;
    }

    public function getAuthor()
    {
        echo $this->author();
    }
}

class newBook extends Book
{
    public function author()
    {
        return 'The author name are ' . parent::$name . ' and Ankur';
    }
}

$book = new newBook;
echo $book->author();
