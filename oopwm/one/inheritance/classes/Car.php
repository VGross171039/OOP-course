<?php 
class Car{
  private $model;

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function hello()
  {
    return 'Бип! Я ' . $this->model . '<br>';
  }

}

class SportsCar extends Car{
  
}

class AdvancedCar extends Car{
  private $style = '- быстрый и надежный!';

  public function driveStyle()
  {
    return 'Автомобиль ' . $this->getModel() . ' ' . $this->style . '<br>';
  }

}

class ProtectedCar{
  protected $model;
  protected $color;

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

  protected function intro()
  {
    echo "Автомобиль {$this->model} имеет цвет: {$this->color}" . '<br>';
  }


}

class ChildrenProtectedCar extends ProtectedCar{

  public function hello()
  {
    return 'Бип! Я ' . $this->model . '<br>';
  }

  public function message() {
    echo "Какой цвет у автомобиля? " . "<br>";
    $this -> intro();
  }

}

?>