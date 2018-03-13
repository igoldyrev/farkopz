<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"] . "/backend/blocks/metatagslight.php"); ?>

<div class="wrapper">
    <div class="wrapper__content">
        <?php
        //В файле на первом этапе нужно принять данные из пост массива. Для этого создаем переменные
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        //Первая функция преобразует все символы, которые пользователь попытается добавить в форму
        $name = htmlspecialchars($name);
        $phone = htmlspecialchars($phone);
        //Вторая функция декодирует url, если пользователь попытается его добавить в форму
        $name = urldecode($name);
        $phone = urldecode($phone);
        //Третьей функцией мы удалим пробелы с начала и конца строки, если таковые имеются
        $name = trim($name);
        $phone = trim($phone);
        //Заносим данные из формы в переменные
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];

        include($_SERVER["DOCUMENT_ROOT"] . "/backend/scripts/mails.php");

        if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){

            if (mail($email, "Обратный звонок с сайта farkopz.ru", $callback, "From: autobagaz@yandex.ru \r\n")){
                echo "<title>Вам обязательно перезвоним!</title>";
                echo "<div class='good-message'>";
                echo "<p class='text'>Мы Вам обязательно перезвоним!</p>";
                echo "</div>";
                echo "<div class='notification-wrap'>";
                echo "<p class='text'>Через 5 секунд Вы будете перенаправлены на предыдущую страницу</p>";
                echo "<p class='text'>Если этого не произошло, то нажмите на ссылку:</p>";
                echo "<a class='link link--green-hover' href='/'>Вернуться назад</a>";
                echo "</div>";
                header('Refresh: 5; URL="/"');
            }
            else {
                echo "<title>При отправке данных возникли проблемы</title>";
                echo "<div class='good-message good-message--wrong'>";
                echo "<p class='text'>При отправке данных возникли проблемы :(</p>";
                echo "</div>";
                echo "<div class='notification-wrap'>";
                echo "<a class='link link--green-hover' href='/'>Вернуться назад</a>";
                echo "</div>";
            }
        }
        else {
            echo "<title>Вы не заполнили одно из полей формы</title>";
            echo "<div class='good-message good-message--wrong'>";
            echo "<p class='text'>Вы не заполнили одно из обязательных полей формы, вернитесь, пожалуйста, и заполните его</p>";
            echo "</div>";
            echo "<div class='notification-wrap'>";
            echo "<a class='link link--green-hover' href='/'>Вернуться назад</a>";
            echo "</div>";
        } ?>
    </div>
</div>
<?php  include ($_SERVER["DOCUMENT_ROOT"]."/backend/blocks/counters.html"); ?>