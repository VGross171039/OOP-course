<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>

<?php 
// Это пользовательский класс с приватными свойствами $firstName и $lastName
class User {
  private  $firstName; 
  private $lastName; 

  // Добавьте в класс метод конструктора, чтобы установить значение для свойства $firstName сразу после создания объекта

  public function __construct($firstName = null, $lastName = null)
  {
    if($firstName){
      return $this->firstName = $firstName;
    }
    if($lastName){
      return $this->lastName = $lastName;
    }
    
  }

  public function getFullName()
  {
    return $this->firstName . ' ' . $this->lastName;
  }

}

$newUser = new User('Vlad', 'Schetinin');
echo $newUser->getFullName();


?>

<?php require_once $root . '/template/footer.php';?>