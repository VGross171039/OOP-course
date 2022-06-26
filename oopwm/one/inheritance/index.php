<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Введение в тему</h3>

<hr>

<?php 
$myCar = new SportsCar();
$myCar->setModel('Mersedes-Benz');
echo $myCar->hello();
?>

<hr>

<?php
$myNewCar = new AdvancedCar();
$myNewCar->setModel('Ferrary');
echo $myNewCar->driveStyle();
?>

<hr>

<h3>Модификатор защищенного доступа (protected)</h3>

<hr>

<?php 
$protectedCar = new ChildrenProtectedCar();
$protectedCar->setModel('Mazeratty');
$protectedCar->setColor('red');

echo $protectedCar->hello();
$protectedCar->message();

?>

<hr>

<h3>Переопределение родительских свойств и методов</h3>

<hr>

<?php require_once $root . '/template/footer.php';?>