<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/header.php'; ?>
<?php require_once 'classes/Getsetters.php';?>

<h3>Магические методы get и set <span>Применять с осторожностью, точно зная зачем и почему</span></h3>

<ul>
  <li>Поля. Передают свойства класса</li>
  <li></li>
  <li></li>
  <li></li>
</ul>

<hr>

<?php 
$student = new Student('Sydorov', 'Petya');

$student->status = 10;
echo $student->status . PHP_EOL;
echo '<br>';
echo $student->getFullName();
echo '<br>';
$student->htr = 12345;
echo $student->htr;
echo '<br>';
unset($student->htr);
echo 'Result after unset: ' . $student->htr;
echo '<br>';

$student(23);

echo '<br>';

echo $student;

?>

<hr>

<p>Время - 1:32</p>

<?php require_once $root . '/template/footer.php'; ?>