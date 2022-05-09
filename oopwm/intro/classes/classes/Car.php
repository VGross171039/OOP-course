<?php 

class Car {

  public $name;
  public $color;

  // ===================== Добавление методов в класс ======================

  function set_name($name) {   // Устанавливает значение свойства
    $this->name = $name;
  }
  function get_name() {   // Получает значение свойства
    return $this->name;
  }

  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }


  public function hello() 
  {
    return 'beep' . '<br>';
  }

}

?>