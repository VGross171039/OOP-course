<?php 

class Student
{
  private $firstName;
  private $lastName;

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function rename($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFullName()
  {
    return $this->lastName . ' ' . $this->firstName;
  }
  
}

?>