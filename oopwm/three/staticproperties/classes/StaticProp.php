<?php 
class Aliera{
  public static $value = 2.71828;
  public function staticValue()
  {
    return self::$value . '<br>';
  }
}

class dotherAliera extends Aliera{
  public function matStatic()
  {
    parent::$value . '<br>';
  }
}

class Utilis{
  public static $numberCars = 0;
  static public function addCars()
  {
    return self::$numberCars++ . '<br>';
  }
}

?>