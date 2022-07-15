<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/StaticProp.php';?>

<h3>Статические свойства
  <span>Доступ к статическим свойствам осуществляется так же, как и к статическим методам.
    <br>Применяются те же правила видимости</span>
</h3>

<div class="code-exsemple">
  <p>Синтаксис</p>
  <pre>
    <code>
      class ClassName {
          public static $staticProp = 'Привет мир!';
        }
      }
      
      Доступ к статическому свойству:
      ClassName::staticProp;
    </code>
  </pre>
</div>

<?php 
echo Aliera::$value . '<br>';

$aliera = new Aliera();
echo $aliera->staticValue();

echo dotherAliera::$value . '<br>';

echo Utilis::addCars();
echo Utilis::addCars();
echo Utilis::addCars();

?>

<?php require_once $root . '/template/footer.php';?>