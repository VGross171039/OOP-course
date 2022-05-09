<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>

<ul>
  <li>Напишите класс User и добавьте свойства для имени и фамилии пользователя</li>
  <li>Добавьте метод, который возвращает приветствие: hello</li>
  <li>Создайте первый экземпляр класса и назовите его $user1</li>
  <li>Установите напрямую значения свойствам имени и фамилии объекта $user1</li>
  <li>Получите имя и фамилию пользователя и выведите его на экран</li>
  <li>Используйте метод hello() с переменными имени и фамилии, чтобы поздороваться с пользователем</li>
  <li>Добавьте еще один объект, назовите его $user2, дайте имя 'Anton' и фамилию 'Maximov'</li>
  <li>Поздоровайтесь с новым пользователем</li>
</ul>

<hr>

<?php 
class User {
  public $name;
  public $lastName;

  public function hello()
  {
    return 'Hello';
  }
}

?>

<?php 
$user1 = new User();
$user2 = new User();

$user1->name = 'Vladlen';
$user1->lastName = 'Schetinin';
$user2->name = 'Anton';
$user2->lastName = 'Maximov';

echo $user1->name . ' ' . $user1->lastName . '<br>';
echo $user1->hello() . ', ' . $user1->name . ' ' . $user1->lastName . '<br>';
echo $user2->hello() . ', ' . $user2->name . ' ' . $user2->lastName . '<br>';

?>




<?php require_once $root . '/template/footer.php';?>