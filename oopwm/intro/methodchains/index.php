<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<?php 
$bmw = new Car();
$tank = $bmw -> fill(10) -> ride(38) -> tank;

echo $tank;

?>

<?php require_once $root . '/template/footer.php';?>