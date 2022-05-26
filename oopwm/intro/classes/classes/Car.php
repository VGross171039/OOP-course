<?php 

class Car{
  private $name;
  private $color = 'green';

  private $all = [];

  // ==============================================================

  public function set_all($all){
    $this->all = $all;
  }
  public function get_all(){
    return $this->all;
  }

  // ==============================================================

  public function set_name($name){  // set - устанавливает свойство
    $this->name = $name;
  }
  public function get_name(){  // get - получает чвойство
    return $this->name;
  }

  // ==============================================================

  public function set_color($color){  // set - устанавливает свойство
    $this->color = $color;
  }
  public function get_color(){  // get - получает чвойство
    return $this->color;
  }

  // ==============================================================

  public function hello(){
    return 'beep';
  }

}

?>