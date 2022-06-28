<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Car.php';?>

<h3>Наследование. Общие принципы</h3>

<div class="code-exsemple">
  <p>Синтаксис</p>
  <pre>
    <code>
      class ParentClass {

      }
      class ChildClass extends ParentClass {
        
      }
    </code>
  </pre>
</div>

<p class="py-05">Пример 1</p>

<?php 
$myCar = new MyCarExemple();
$myCar->setModel('Mersedes-Benz');
echo $myCar->hello();
?>

<h3>Собственные методы и свойства дочернего класса</h3>

<?php 
$myCar = new SportCar();
$myCar->setModel('Ferrary');
echo $myCar->driveStyle();
?>

<h3>Наследование и модификатор защищенного доступа</h3>

<?php 
$myCar = new ProtectedModelCar();
$myCar->setName('VAZ');
echo $myCar->hello();
?>

<p class="py-05">Пример с методами</p>

<?php 
$myCar = new MySportCar('Mercedes Benz', 'Красный');
$myCar->message();
?>

<h3>Переопределение родительских свойств и методов</h3>

<?php require_once $root . '/template/footer.php';?>