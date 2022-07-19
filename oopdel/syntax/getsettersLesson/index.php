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
echo $student->getFullName() . '<br>';
?>

<hr>

<?php 
$student->status = 10;
echo $student->status . '<br>';

$student->asdf = 'ASDF';
echo $student->asdf . '<br>';

unset($student->asdf);
damp_arr($student->asdf);

$student(23);

echo $student;

?>

<p>1:31:27</p>



<?php require_once $root . '/template/footer.php'; ?>