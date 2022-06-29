<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Const.php';?>

<h3>Константа класса PHP<span>Константы класса PHP могут быть объявлены в пределах одного класса. При объявлении или при
    обращении к константам, в отличие от переменных, к ним не используется символ $. Область видимости констант по
    умолчанию public, хотя в определении могут использоваться другие модификаторы</span></h3>

<div class="code-exsemple">
  <p>Синтаксис</p>
  <pre>
    <code>
      class Test {
        /*Задаем константу:*/
        const CONSTANT = 'значение константы';
      }
    </code>
  </pre>
</div>

<h3>Доступ к константе класса</h3>

<p>Извне класса</p>
<?php 
echo GreatPublic::LEAV_MESS; 
?>

<p>Изнутри класса</p>
<?php 
$testIntro = new GreatIntro();
echo $testIntro->greeting();

?>

<p>Модификаторы</p>
<?php 
$testPrivate = new GreatPrivate();
echo $testPrivate->greetingPrivate();

?>

<h3>Константа класса как выражение</h3>

<?php 
$s1=new Square();
echo "PI=". Square::PI . "<br>";
echo "area=" . $s1->area();
?>




<?php require_once $root . '/template/footer.php';?>