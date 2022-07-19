<?php 

class Student
{
  private $firstName;
  private $lastName;

  private $attributes = [];

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

// ==================== Методы  работы с необьявленными полями =======================
// Создает резиновый обьект с возможностью создания новых полей как бы вне класса

  public function __get($name)
  {
    return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
  }

  public function __set($name, $value)
  {
    $this->attributes[$name] = $value;
  }

// =================================================

  public function __unset($name)  // Метод удаления
  {
    unset($this->attributes[$name]);
  }

  public function __isset($name)  // Метод проверки
  {
    return isset($this->attributes[$name]);
  }

// ====================== Обработка объекта как функции =====================

  public function __invoke()
  {
    echo 'Invoke' . '<br>';
  }

// ======================== Способен преобразовать обьект в строку =========================

  public function __toString()
  {
    return $this->getFullName() . '<br>';
  }

// =================================================

  public function getFullName()
  {
    return $this->lastName . ' ' . $this->firstName;
  }
  
}

?>