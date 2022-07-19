<?php 
namespace classes\Student;

class Student
{
  public $name;
  public $sureName;

  public function __construct($name, $sureName)
  {
    echo $name . ' ' . $sureName . '<br>';
  }
}

?>