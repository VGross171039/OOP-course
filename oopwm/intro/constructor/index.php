<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Работа конструктора</h3>

<?php 
//Мы создаем новый объект Car передавая значение color
$car1 = new Car('Mersedes', 'green');

print_arr($car1);

// Код успешно выполняется
echo $car1->getCarModel();
echo '<br>';
echo $car1->getCarColor();

?>

<h3>Магические константы</h3>

<ul class="mb-1">
  <li>__CLASS__<span> — получить имя класса, использующего константу</span></li>
  <li>__LINE__<span> — получить номер строки, использующей константу</span></li>
  <li>__FILE__<span> — получить полный путь или имя файла, использующего константу</span></li>
  <li class="mb-05">__METHOD__<span> — получить имя метода, использующего константу</span></li>
  <li><a href="https://www.php.net/manual/ru/language.constants.magic.php">Полный перечень </a><span> магических констант и их описание</span></li>
</ul>

<?php 
// Применение магической константы CLASS
echo $car1->getClass();

?>

<?php require_once $root . '/template/footer.php';?>