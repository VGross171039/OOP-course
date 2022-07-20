<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/header.php'; ?>
<?php require_once 'classes/Constants.php';?>

<h3>Константы в классах</h3>

<ul>
  <li>Поля. Передают свойства класса (состояние)</li>
  <li>Методы. Нужны для манипуляций / действий</li>
  <li></li>
  <li></li>
</ul>

<hr>

<?php 
$student = new Student('Vladlen', 'Schetinin');
echo $student->getFullName() . '<br>';

echo $student::TYPE_OCHN . '<br>';

print_arr(Student::typesList());
?>

<p>02:13</p>
<p>Далее идут вопросы</p>



<?php require_once $root . '/template/footer.php'; ?>