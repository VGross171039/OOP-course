<?php 

class Student
{
  private $firstName;
  private $lastName;

  private $attributes = [];

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function __get($name)
  {
    return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
  }

  public function __isset($name)
  {
    return isset($this->attributes[$name]);
  }

  public function __unset($name)
  {
    unset($this->attributes[$name]);
  }

  public function __set($name, $value)
  {
    $this->attributes[$name] = $value;
  }

  public function __invoke()
  {
    echo 'Invoke';
  }

  public function __toString()
  {
    return 'Test';
  }

  // public function __get($name)
  // {
  //   echo 'Get ' . $name . ' ' . PHP_EOL;
  // }

  // public function __set($name, $value)
  // {
  //   echo 'Set ' . $name . ' ' . $value . PHP_EOL;
  // }

  public function rename($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function getFullName()
  {
    return $this->lastName . ' ' . $this->firstName;
  }
  
}

?>