<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
  // Properties are attributes that belong to a class
  // Access Modifiers: public, private, protected
  public $name;
  public $email;
  public $password;

  // constructor is a method that runs when a object is created
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods: Functions that belongs to a class
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}

// Instantiate a user object
$user1 = new User("Azan", "azan@gmail.com", "password");
$user2 = new User("Ashraf", "ashraf@gmail.com", "123456");

// $user1->set_name("Azan");
// $user2->set_name("Ashraf");

// var_dump($user2);

// echo $user1->get_name();
// echo $user2->get_name();

// inheritance

class Employee extends User
{
  public $title;
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }
}

$employee1 = new Employee("sara", "sara@gmail.com", "43232", "manager");

echo $employee1->title;
