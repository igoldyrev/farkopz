<?php
$email = "goldirev12@yandex.ru";

$callback = "
Имя: ".$name.";
Телефон: ".$phone.";

Техническая информация
Сайт, откуда пришло письмо: farkopz.ru
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";

$zakaz = "
Имя: ".$name.";
Телефон: ".$phone.";
Марка машины: ".$auto.";
Текст сообщения: ".$text.";

Техническая информация
Сайт, откуда пришло письмо: farkopz.ru
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";

$request = "
Имя: ".$name.";
Телефон: ".$phone.";
Марка машины: ".$auto.";

Техническая информация
Сайт, откуда пришло письмо: farkopz.ru
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";