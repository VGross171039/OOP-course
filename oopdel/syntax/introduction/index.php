<?php

use introduction\Sample\Student;

 $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/header.php'; ?>
<?php require_once 'classes/Sample.php';?>

<h3>Пример из урока 1</h3>

<p>Внимание! <br>Если есть всего один способ, и он правильный - это приятнее, чем если есть десять способов, половина из
  которых неправильные.</p><br>

<?php 
$student = new Student();

$student->firstName = 'Vasya';
$student->lastName = 'Pupkin';

echo $student->getFullName() . PHP_EOL;

?>

<?php require_once $root . '/template/footer.php'; ?>