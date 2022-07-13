<?php 
class Car{

  public static function getColor()
  {
    return 'blue';
  }

}

class SomeOther{
  public function message()
  {
    echo Car::getColor();
  }
}

class MyClass{
  public static function myStaticMethod()
  {
    echo 'Привет, мир!';
  }

  public function __construct()
  {
    self::myStaticMethod();
  }
}

class MyFamily{
  protected static function getDaughterName()
  {
    echo 'Olga';
  }
}

class FamilyItem extends MyFamily{
  public $daughterName;
  public function __construct()
  {
    $this->daughterName = parent::getDaughterName();
  }
}

?>