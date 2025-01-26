<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}


class Admin extends User
{
  public $level;
  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    parent::__construct($name, $email);
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function login()
  {
    echo 'Admin' . $this->name . ' logged in <br>';
  }
}

$admin1 = new Admin('Tom Smith', 'tom@gmail.com', 5);
var_dump($admin1);
echo $admin1->name;
echo $admin1->email;
echo $admin1->level;
$admin1->login();
echo $admin1->getStatus();
$admin1->login();
