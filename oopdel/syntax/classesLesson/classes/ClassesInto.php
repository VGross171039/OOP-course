<?php 

class Student
{
  private $firstName;
  private $lastName;
  public $birthDate;

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