<?php 
class Car {
  public $tank;


  public function fill($float)
  {
    $this->tank += $float;
    return $this;
  }

  public function ride($float) 
  {
    $kms = $float;
    $liters = $kms / 10;
    $this->tank -= ($liters);
    return $this;
  }



}



?>