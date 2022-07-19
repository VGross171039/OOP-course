<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php require_once $root . '/template/header.php';?>
<?php require_once 'classes/Student.php';?>

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

<hr>

<?php 
$student = new classes\Student\Student('Vladlen', 'Schetinin');

?>

<?php require_once $root . '/template/footer.php';?>