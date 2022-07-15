<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/usage.php';?>

<h3>Пространства имен <span>Пространство имён задается с помощью ключевого слова namespace, за которым следует имя
    пространства имён</span>
</h3>

<div class="code-exsemple">
  <p>Синтаксис</p>
  <pre>
    <code>
      namespace MyApp;
    </code>
  </pre>
</div>

<?php 
echo Math\add(4,7); // 11
echo "<br>";
echo Math\PI; // 3.14
echo "<br>";
echo Math\Geometry::getCircleArea(5); // 78.5

?>

<?php require_once $root . '/template/footer.php';?>