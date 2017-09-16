<div id="zakaz">
<h2>Заказать фаркоп</h2>
<form action="/zakaz" method="post">
<span class="label_top">Ваше имя:</span>
<div class="better-placeholder">
  <input type="text" name="name" required="required" pattern="[А-Яа-яЁё]{2,}" class="better-placeholder__input" placeholder="Введите Ваше имя">
  <label for="name" class="better-placeholder__label">Введите Ваше имя</label>
</div><br>
<span class="label_top">Ваш телефон:</span>
<div class="better-placeholder">
  <input type="text" name="phone" class="better-placeholder__input" required="required" pattern="[0-9]{10,11}" placeholder="Введите номер телефона">
  <label for="phone" class="better-placeholder__label">Введите номер телефона</label>
</div><br>
<span class="label_top">Марка машины:</span>
<div class="better-placeholder">
  <input type="text" name="auto" class="better-placeholder__input" pattern="^[A-Za-zА-Яа-яЁё0-9\s]+$" placeholder="Введите марку автомобиля">
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
<textarea name="text" class="better-placeholder__input" pattern="^[A-Za-zА-Яа-яЁё0-9\s]+$" placeholder="Введите текст заявки"></textarea>
  <label for="text" class="better-placeholder__label">Введите текст заявки</label>
</div><br>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/captcha_frame.php"); ?>
<div align="center">
<input class="input__button" type="submit" value="Оставить заказ">
</div>
</form></div>