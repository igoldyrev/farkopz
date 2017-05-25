<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Оставить заявку</title>";
?>

<meta name="description" content="Заказ и продажа фаркопов и смарт-коннектов Westfalia, Galia, Imiola, Hak-System, Thule-Brink, Балтекс, Лидер-плюс в Перми. Пермь, ул. Спешилова 102/29.">
<meta name="keywords" content="оставить заказ, заказ, заказать фаркоп, заказать ТСУ, фаркопы, фаркоп, монтаж, ТСУ, прокат, прокат фаркопов, прокат ТСУ, интернет-магазин, продажа в Перми, Пермь, Автобагаж, в Перми, Westfalia, Galia, Imiola, Hak-System, Thule-Brink, Балтекс, Лидер-плюс, Auto-Hak"> 
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/header.html");?>
<div id="leftmenu">
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/leftmenu.html");?>
</div>
<div id="content">
<h1>Оставить заявку</h1>
<p>Пользуясь этой формой вы можете отправить заявку, если выбрали модель багажника в каталоге, либо если не смогли это сделать. Укажите Ваши пожелания относительно багажника и не забудьте указать данные Вашего автомобиля и контактные данные. Мы свяжемся с вами в ближайшее время и поможем с выбором.</p>
<form action="/zakaz.php" method="post">
<span class="label_top">Ваше имя:</span>
<div class="better-placeholder">
  <input type="text" name="name" required="required" class="better-placeholder__input" placeholder="Введите Ваше имя">
  <label for="name" class="better-placeholder__label">Введите Ваше имя</label>
</div><br>
<span class="label_top">Ваш телефон:</span>
<div class="better-placeholder">
  <input type="text" name="phone" class="better-placeholder__input" required="required" placeholder="Введите номер телефона">
  <label for="phone" class="better-placeholder__label">Введите номер телефона</label>
</div><br>
<span class="label_top">Марка машины:</span>
<div class="better-placeholder">
  <input type="text" name="auto" class="better-placeholder__input" placeholder="Введите марку автомобиля">
  <label for="auto" class="better-placeholder__label">Введите марку автомобиля</label>
</div><br>
<span class="label_top">Тип кузова:</span>
<div class="better-placeholder">
  <select class="better-placeholder__select" size="1" name="kuzov">
    <option selected="selected" value="none">Не указано</option>
    <option value="sedan">Седан</option>
    <option value="xetchbek">Хэтчбек</option>
    <option value="universal">Универсал</option>
  </select>
</div><br>
<span class="label_top">Год выпуска:</span>
<div class="better-placeholder">
  <input type="text" name="year" class="better-placeholder__input" placeholder="Введите год выпуска автомобиля">
  <label for="year" class="better-placeholder__label">Введите год выпуска автомобиля</label>
</div><br>
<span class="label_top">Текст заявки</span>
<div class="better-placeholder">
<textarea name="text" class="better-placeholder__input" placeholder="Введите текст заявки"></textarea>
  <label for="text" class="better-placeholder__label">Введите текст заявки</label>
</div><br>
<div align="center">
<input class="input__button" type="submit" value="Оставить заявку">
</div>
</form>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>