<?php
class Book
{
    public $price;
    public $authors;
    public $author;

    public function price(int $price)
    {
        $this->price = $price;
    }
    
    public function authors(array $names)
    {
        $this->authors = $names;
    }

    //type hinting the object
    public function author(Person $person)
    {
        $this->author = $person->names();
    }
}

$book = new Book;
$book->price(20);
$book->authors(['Sarthak', 'Ankur']);

echo $book->price . '<br>';
print_r($book->authors);
echo '<br>';

$person = new Person;
$book->author($person);
print_r($book->author);

class Person
{
    public function names()
    {
        return ['Thanu', 'Anup'];
    }
}