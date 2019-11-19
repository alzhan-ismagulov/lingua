<?php
/*Реализация загрузки файла*/
if(!isset($_POST['submit'])){
echo "<div class='col-md-12'>";
echo "<h1>Загрузка новых файлов</h1>";
echo "<form enctype='multipart/form-data' action='upload.php' method='post'>";
echo "<input type='hidden' name='MAX_FILE_SIZE' value='10485760'>";
echo "<input name='uploadfile' type='file' multiple=''>";
echo "<p>";
echo "<input type='submit' name='submit' value='Загрузить файл'>";
echo "</form>";
echo "</div>";
}else{
$uploaddir = 'upload/';
// Каталог, в который мы будем принимать файл:
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
  echo "Файл " . "<a href = 'upload/" . $filename . "'>" . $filename . "</a>" . " загружен";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Добавить заказ</title>
  </head>
  <body>

  </body>
</html>
