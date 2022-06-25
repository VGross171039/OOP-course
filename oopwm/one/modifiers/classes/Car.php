<?php 
class Car{
  private $model;

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function getModel()
  {
    return 'Car model: ' . $this->model . '<br>';
  }

}

?>