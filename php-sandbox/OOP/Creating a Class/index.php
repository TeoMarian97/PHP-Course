<?php

class User
{
    public $name;
    public $email;

    public function login()
    {
        echo $this->name . 'logged in';
    }

    public function __construct($name, $email)
    { //Same constructor as Java
        echo 'Constructor ran..';
        $this->name = $name;
        $this->email = $email;
    }
}

//Instantiate new object

$user1 = new User('John Doe', 'john@gmail.com');
// $user1->name = 'John Doe';
// $user1->email = 'john@gmail.com';

var_dump($user1);

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');
// $user2->name = 'Jane Doe';
$user2->login();

var_dump($user2);
