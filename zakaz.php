<?php
session_start();
if (isset($_POST['captcha']) && $_POST['captcha'] == $_SESSION['keystring']){

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
//Заносим данные из формы в переменные
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$auto = $_REQUEST['auto'];
$kuzov = $_REQUEST['kuzov'];
$year = $_REQUEST['year'];
$text = $_REQUEST['text'];

if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['auto'])&&$_POST['auto']!="")&&(isset($_POST['kuzov'])&&$_POST['kuzov']!="")&&(isset($_POST['year'])&&$_POST['year']!="")&&(isset($_POST['text'])&&$_POST['text']!="")){

if (mail("autobagaz@yandex.ru", "Заказ товара с farkopz.ru","
Имя:".$name.";
Телефон: ".$phone.";
Марка машины: ".$auto.";
Тип кузова: ".$kuzov.";
Год выпуска: ".$year.";
Текст заказа: ".$text.";

Техническая информация:
ip-адрес:" .$_SERVER['REMOTE_ADDR'].";",
"From: autobagaz@yandex.ru \r\n"))
 {     	echo "<center><b>Ваш заказ успешно отправлен!</b><br><br><center>Через 3 секунды Вы будете перенаправлены на предыдущую страницу<br><br>Если этого не произошло, то нажмите на ссылку:<br><a href='/'>Вернуться назад</a>"; 
header("Refresh: 3; URL='/'");
} 
else { 
    echo "<center>При отправке заказа возникли проблемы :(<br><a href='/'>Вернуться назад</a>";
}}
else {
	echo "<center>Вы не заполнили одно из обязательных полей формы, вернитесь, пожалуйста, и заполните его<br><a href='/'>Вернуться назад</a>";
}
}
else{
    echo "<center>Вы неправильно ввели числа с картинки, вернитесь, пожалуйста, и введите их правильно<br><br><a href='/'>Вернуться назад</a>";
}
include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>