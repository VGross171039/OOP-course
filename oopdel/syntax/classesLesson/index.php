<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/header.php'; ?>
<?php require_once 'classes/ClassesInto.php';?>

<h3>Из чего состоит класс</h3>

<ul>
  <li>Поля. Передают свойства класса</li>
  <li></li>
  <li></li>
  <li></li>
</ul>

<hr>

<?php 
$student = new Student();

// $student->firstName = 'Vasya';
// $student->lastName = 'Pupkin';

// echo $student->getFullName() . PHP_EOL;

// echo '<br>';

$student->rename('Vladlen', 'Schetinin');

echo $student->getFullName() . PHP_EOL;

?>

<p>Время - 1.04</p>

<?php require_once $root . '/template/footer.php'; ?>