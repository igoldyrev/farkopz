<?php include ($_SERVER["DOCUMENT_ROOT"]."/scripts/connect.php");
$id = $_REQUEST['zakaz'];
$select_sql = "SELECT `id`, `marka`, `model`, `year`, `proizv`, `desc` FROM acura WHERE id= $id";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='/zakaz.php' method='post'>
<input type='hidden' name='id'  value='%s'><br/>
<label for='proizv'>Название товара. Можно и иногда нужно указывать html-теги</label><br/>
<input type='text' name='proizv' size='50' value='%s'><br/>
<label for='desc'>Ссылка на изображение в формате /images/lyzhi/thule_xtender_2.jpg</label><br/>
<input type='text' name='desc' size='50' value='%s'><br/>
<label for='year'>Альтернативный тег alt для изображения</label><br/>
<input type='text' name='year' size='50' value='%s'><br/>
<label for='product_price'>Цена. Можно и иногда нужно указывать html-теги</label><br/>
<input name='product_price' type='text'  size='50' value='%s'>
<br/>
<input id='submit' type='submit' value='Редактировать запись'><br/>
</form>",$row['id'], $row['proizv'], $row['desc'], $row['year'], $row['product_price']);
?>