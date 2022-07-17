<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/header.php'; ?>
<?php require_once 'classes/Construct.php';?>

<h3>Работа с конструктором</h3>

<ul>
  <li>Поля. Передают свойства класса</li>
  <li></li>
  <li></li>
  <li></li>
</ul>

<p>Примечание: Деструктор не очень актуальная конструкция</p>

<hr>

<?php 
$student = new Student('Vladlen', 'Schetinin');

echo $student->getFullName() . '<br>';

$student->rename('Vasya', 'Pupkin');

echo $student->getFullName() . '<br>';

?>

<?php require_once $root . '/template/footer.php'; ?>