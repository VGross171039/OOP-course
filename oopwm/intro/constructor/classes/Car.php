<?php 
class Car {
  public $model;
  public $color = '';

  public function __construct($model, $color = null)
  {
    $this->model = $model;
    
    // Только в случае передачи значения color ему будет присвоено
    if($color){
      $this->color = $color;
    }
    
  }

  public function getCarModel()
  {
    return 'Модель автомобиля: ' . $this->model;
  }

  public function getCarColor()
  {
    return 'Цвет автомобиля: ' . $this->color;
  }

  // Применение магической константы CLASS
  
  public function getClass()
  {
    return 'Имя класса: ' . __CLASS__;
  }

}



?>