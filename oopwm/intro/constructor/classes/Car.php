<?php 
class Car{
  private $model = '';
  private $color = '';

  public function __construct($model = null, $color = null)
  {
    if($model){
      $this->model = $model;
    }
    if($color){
      $this->color = $color;
    }
  }

  public function getCarModel()
  {
    return 'Class Name: ' . __CLASS__ . '<br>' . 'Car Mark: ' . $this->model;
  }

  function getCarColor() 
  {
    return 'Class Name: ' . __CLASS__ . '<br>' . 'Car Color: ' . $this->color;
  }

}


?>