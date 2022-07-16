<?php 
namespace introduction\Sample;

class Student
{
  public $firstName;
  public $lastName;
  public $birthDate;

  public function getFullName()
  {
    return $this->lastName . ' ' . $this->firstName;
  }
}

?>