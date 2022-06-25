<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Модификаторы доступа в PHP</h3>
<p>Доступ к свойству private:</p>
Сеттеры — методы устанавливающие значения приватных свойств. <br>
Геттеры — методы, которые получают значения частных свойств. <br>

<hr>

<?php 
$bmw = new Car();

$bmw->setModel('BMW');
echo $bmw->getModel();

print_arr($bmw);

?>

<?php require_once $root . '/template/footer.php';?>