<?php
//В файле на первом этапе нужно принять данные из пост массива. Для этого создаем переменные
$name = $_POST['name'];
$phone = $_POST['phone'];
$auto = $_POST['auto'];
$kuzov = $_POST['kuzov'];
$year = $_POST['year'];
$text = $_POST['text'];
//Первая функция преобразует все символы, которые пользователь попытается добавить в форму
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$auto = htmlspecialchars($auto);
$kuzov = htmlspecialchars($kuzov);
$year = htmlspecialchars($year);
$text = htmlspecialchars($text);
//Вторая функция декодирует url, если пользователь попытается его добавить в форму
$name = urldecode($name);
$phone = urldecode($phone);
$auto = urldecode($auto);
$kuzov = urldecode($kuzov);
$year = urldecode($year);
$text = urldecode($text);
//Третьей функцией мы удалим пробелы с начала и конца строки, если таковые имеются
$name = trim($name);
$phone = trim($phone);
$auto = trim($auto);
$kuzov = trim($kuzov);
$year = trim($year);
$text = trim($text);


if (mail("autobagaz@yandex.ru", "Заказ с сайта", "Имя:".$name.";
Телефон: ".$phone.";
Марка машины: ".$auto.";
Тип кузова: ".$kuzov.";
Год выпуска: ".$year.";
Текст заявки: ".$text ,"From: autobagaz@yandex.ru \r\n"))
 {     	echo "<center><b>Ваш заказ успешно отправлен!</b><br><br><center>Через 3 секунды Вы будете перенаправлены на предыдущую страницу<br><br>Если этого не произошло, то нажмите на ссылку:<br><a href='zayavka.php'>Вернуться назад</a>"; 
header('Refresh: 3; URL=/zayavka.php');
} 
else { 
    echo "<center>При отправке заказа возникли проблемы :(<br><a href='/zayavka.php'>Вернуться назад</a>";
}?>