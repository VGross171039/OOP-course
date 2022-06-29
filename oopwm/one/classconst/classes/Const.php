<?php 
class GreatPublic{
  const LEAV_MESS = "Welcome to wm-school.ru"; 
}

class GreatIntro{
  const LEAV_MESS = "Welcome to wm-school.ru"; 
  public function greeting() {
    return self::LEAV_MESS;
  }
}

class GreatPrivate{
  private const LEAV_MESS = "Welcome to wm-school.ru"; 
  public function greetingPrivate() {
    return self::LEAV_MESS;
  }
}

const X = 22;
const Y=7;
class Square {
   const PI=X/Y;
   var $side=5;
   function area(){
      $area=$this->side**2*self::PI;
      return $area;
   }
}


?>