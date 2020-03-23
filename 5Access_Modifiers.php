<?php

class User
{
    public $name = 'Sarthak';
    protected $email = 'teju@gmail.com';
    private $password = '123456';

    public function getPass()
    {
        return $this->password;
    }
}

$user=new User;
echo $user->getPass() . '<br>';

class Admin extends User
{
    function __construct()
    {
        echo $this->email . '<br>';
    }
}

$admin=new Admin;
$user=new User;
echo $user->name;