<?php
 $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>

<?php 
class User {
  private $firstName;
  private $lastName;
  private $ago = '';

  public function __construct($firstName, $lastName, $ago = null)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    if($ago){
      $this->ago = $ago;
    }
  }

  public function getFullName()
  {
    return $this->firstName . ' ' . $this->lastName . ', ' . $this->ago . ' лет';
  }
}

$user1 = new User('Max', 'Maximov', 45);

echo $user1->getFullName();

?>

<?php require_once $root . '/template/footer.php';?>