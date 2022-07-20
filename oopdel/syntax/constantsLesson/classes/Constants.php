<?php

class Student
{

// =========================================

  const TYPE_OCHN = 1;
  const TYPE_ZAOCHN = 2;

  static $val = 0;

  public static function typesList()
  {
    return [
      self::TYPE_OCHN => 'Очный',
      self::TYPE_ZAOCHN => 'Заочный'
    ];
  }

// ==========================================

  private $firstName;
  private $lastName;
  private $type = self::TYPE_OCHN;

  // Применен необязательный параметр $type
  public function __construct($firstName, $lastName, $type = self::TYPE_OCHN)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->type = $type; 
  }

  public function getFullName()
  {
    return $this->lastName . ' ' . $this->firstName;
  }
  
}

?>