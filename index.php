<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Добро пожаловать!</title>";
?>

<meta name="description" content="Продажа и установка фаркопов Перми. Пермь, ул. Спешилова 102/29.">
<meta name="keywords" content="фаркопы, фаркоп, монтаж, ТСУ, прокат, прокат фаркопов, прокат ТСУ, интернет-магазин, продажа в Перми, Пермь, Автобагаж, в Перми, Westfalia, Galia, Imiola, Hak-System, Thule-Brink, Балтекс, Лидер-плюс, Auto-Hak"> 
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/header.html");?>
<div id="content">
<?php
$auto = [
	[
	'id' => 1,
	'marka' => 'Audi',
	'img' => '/images/logo_auto/Audi.gif',
	],
	[
	'id' => 2,
	'marka' => 'BMW',
	'img' => '/images/logo_auto/BMW.gif',
	],
	[
	'id' => 3,
	'marka' => 'Chevrolet',
	'img' => '/images/logo_auto/Chevrolet.gif',
	],
	[
	'id' => 4,
	'marka' => 'Chrysler',
	'img' => '/images/logo_auto/Chrysler.gif',
	],
	[
	'id' => 5,
	'marka' => 'Citroen',
	'img' => '/images/logo_auto/Citroen.gif',
	],
	[
	'id' => 6,
	'marka' => 'Daewoo',
	'img' => '/images/logo_auto/Daewoo.gif',
	],
	[
	'id' => 7,
	'marka' => 'Dodge',
	'img' => '/images/logo_auto/Dodge.gif',
	],
	[
	'id' => 8,
	'marka' => 'FIAT',
	'img' => '/images/logo_auto/FIAT.gif',
	],
	[
	'id' => 9,
	'marka' => 'Ford',
	'img' => '/images/logo_auto/Ford.gif',
	],
	[
	'id' => 10,
	'marka' => 'GAZ',
	'img' => '/images/logo_auto/GAZ.gif',
	],
	[
	'id' => 11,
	'marka' => 'Honda',
	'img' => '/images/logo_auto/Honda.gif',
	],
	[
	'id' => 12,
	'marka' => 'Hummer',
	'img' => '/images/logo_auto/Hummer.gif',
	],
	[
	'id' => 13,
	'marka' => 'Hyundai',
	'img' => '/images/logo_auto/Hyundai.gif',
	],
	[
	'id' => 14,
	'marka' => 'Infiniti',
	'img' => '/images/logo_auto/Infiniti.gif',
	],
	[
	'id' => 15,
	'marka' => 'Isuzu',
	'img' => '/images/logo_auto/Isuzu.gif',
	],
	[
	'id' => 16,
	'marka' => 'Jeep',
	'img' => '/images/logo_auto/Jeep.gif',
	],
	[
	'id' => 17,
	'marka' => 'Kia',
	'img' => '/images/logo_auto/Kia.gif',
	],
	[
	'id' => 18,
	'marka' => 'Lada',
	'img' => '/images/logo_auto/Lada.gif',
	],
	[
	'id' => 19,
	'marka' => 'Land Rover',
	'img' => '/images/logo_auto/Land Rover.gif',
	],
	[
	'id' => 20,
	'marka' => 'Lexus',
	'img' => '/images/logo_auto/Lexus.gif',
	],
	[
	'id' => 21,
	'marka' => 'Mazda',
	'img' => '/images/logo_auto/Mazda.gif',
	],
	[
	'id' => 22,
	'marka' => 'Mercedes',
	'img' => '/images/logo_auto/Mercedes.gif',
	],
	[
	'id' => 23,
	'marka' => 'Mitsubishi',
	'img' => '/images/logo_auto/Mitsubishi.gif',
	],
	[
	'id' => 24,
	'marka' => 'Nissan',
	'img' => '/images/logo_auto/Nissan.gif',
	],
	[
	'id' => 25,
	'marka' => 'Opel',
	'img' => '/images/logo_auto/Opel.gif',
	],
	[
	'id' => 26,
	'marka' => 'Peugeot',
	'img' => '/images/logo_auto/Peugeot.gif',
	],
	[
	'id' => 27,
	'marka' => 'Porsche',
	'img' => '/images/logo_auto/Porsche.gif',
	],
	[
	'id' => 28,
	'marka' => 'Ravon',
	'img' => '/images/logo_auto/Ravon.gif',
	],
	[
	'id' => 29,
	'marka' => 'Renault',
	'img' => '/images/logo_auto/Renault.gif',
	],
	[
	'id' => 30,
	'marka' => 'Skoda',
	'img' => '/images/logo_auto/Skoda.gif',
	],
	[
	'id' => 31,
	'marka' => 'Ssang Yong',
	'img' => '/images/logo_auto/Ssang Yong.gif',
	],
	[
	'id' => 32,
	'marka' => 'Subaru',
	'img' => '/images/logo_auto/Subaru.gif',
	],
	[
	'id' => 33,
	'marka' => 'Suzuki',
	'img' => '/images/logo_auto/Suzuki.gif',
	],
	[
	'id' => 34,
	'marka' => 'Tagaz',
	'img' => '/images/logo_auto/Tagaz.gif',
	],
	[
	'id' => 35,
	'marka' => 'Toyota',
	'img' => '/images/logo_auto/Toyota.gif',
	],
	[
	'id' => 36,
	'marka' => 'UAZ',
	'img' => '/images/logo_auto/UAZ.gif',
	],
	[
	'id' => 37,
	'marka' => 'Volkswagen',
	'img' => '/images/logo_auto/Volkswagen.gif',
	],
	[
	'id' => 38,
	'marka' => 'Volvo',
	'img' => '/images/logo_auto/Volvo.gif',
	],
];
require('templates/main.php');





?>
<p>На российском рынке фаркопов ведущими брендами являются: Galia (Словакия), Westfalia (Германия/Швеция/Франция), Imiola (Польша), Thule (Нидерланды), Bosal (Россия, Бельгия), Auto-Hak (Польша), Steinhof (Польша). Также в наличии имеются фаркопы Лидер-Плюс (Россия), Baltex (Россия), VFM-Bosal group (Босал-Автофлекс) (Россия), AvtoS (Россия), ДЗК (Россия).</p>

<p>Об установке фаркопа</p>

<p>Установку необходимо проводить в соответствии с руководством по установке и эксплуатации описанной в паспорте, который прилагается к каждому тсу, причем лучше всего это доверить профессионалам.</p>

<p>Установка фаркопа в сервисном центре обычно занимает не более 3-х часов. При записи на установку Вы можете быть на 100% уверены в совместимости модели фаркопа и Вашего автомобиля. Еще одним немаловажным плюсом является то, что автомобили с фаркопами, установленными в наших техцентрах, не лишаются гарантии обслуживания у дилера.</p>

</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>