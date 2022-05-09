<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Работа с обьектами</h3>

<?php 
$bmw = new Car();
$mersedes = new Car();

$bmw->name = 'BMW';
$bmw->color = 'green';
echo $bmw->name . ': ';
echo $bmw->color . '<hr>';

$mersedes->name = 'Mercedes Benz';
$mersedes->color = 'red';
echo $mersedes->name . ': ';
echo $mersedes->color . '<hr>';

$bmw->set_name('BMW');  // Устанавливает значение свойства
$mersedes->set_name('Mercedes Benz');
echo $bmw->get_name() . '<br>';  // Получает значение свойства
echo $mersedes->get_name() . '<hr>';

$bmw->set_color('brown');
$mersedes->set_color('green');

echo 'Название: ' . $bmw->get_name() . '<br>';
echo 'Цвет: ' . $bmw->get_color() . '<hr>';
echo 'Название: ' . $mersedes->get_name() . '<br>';
echo 'Цвет: ' . $mersedes->get_color() . '<hr>';

?>

<h3>Является ли объект экземпляром класса<span>Оператор instanceof используется для определения того, является ли текущий объект экземпляром указанного класса</span>
<span>Возвращает TRUE / FALSE</span></h3>

<?php 
damp_arr($bmw instanceof Car);

?>


<?php require_once $root . '/template/footer.php';?>