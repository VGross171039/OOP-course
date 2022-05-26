<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Работа с обьектами</h3>

<?php 
$bmw = new Car();
$mercedes = new Car();

$bmw->set_name('BMW');
$bmw->set_color('red');
echo 'Mark: ' . $bmw->get_name() . '<br>';
echo 'Color: ' . $bmw->get_color() . '<br>';

$mercedes->set_name('Mersedes Bens');
$mercedes->set_color('gray');
echo 'Mark: ' . $mercedes->get_name() . '<br>';
echo 'Color: ' . $mercedes->get_color() . '<br>';

// $bmw = $bmw->get_name() . '<br>';
// echo $bmw;
// $mercedes = $mercedes->get_name() . '<br>';
// echo $mercedes;

print_arr($bmw);
print_arr($mercedes);



?>


<?php require_once $root . '/template/footer.php';?>