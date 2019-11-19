<?php
/*Реализация загрузки файла*/
if(!isset($_POST['submit'])){
echo "<div class='col-md-12'>";
echo "<h1>Загрузка новых файлов</h1>";
echo "<form enctype='multipart/form-data' action='add_order.php' method='post'>";
echo "<input type='hidden' name='MAX_FILE_SIZE' value='10485760'>";
echo "<input name='file' type='file' multiple=''>";
echo "<p>";
echo "<input type='submit' name='submit' value='Загрузить файл'>";
echo "</form>";
echo "</div>";
}else{
$uploaddir = 'upload/';
$filename = iconv("utf-8", "windows-1251", $_FILES['file']['name']);
if ($_POST["submit"]) {
  if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir . $filename)){
    echo "Файл " . "<a href = 'upload/" . $_FILES['file']['name'] . "'>" . iconv("windows-1251", "utf-8", $filename) . "</a>" . " загружен";
  }
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="windows-1251">
    <title>Добавить заказ</title>
  </head>
  <body>

  </body>
</html>
