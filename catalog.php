<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Каталог фаркопов</title>";
?>

<meta name="description" content="Продажа и установка фаркопов Перми. Пермь, ул. Спешилова 102/29.">
<meta name="keywords" content="Acura, фаркопы, фаркоп, монтаж, ТСУ, прокат, прокат фаркопов, прокат ТСУ, интернет-магазин, продажа в Перми, Пермь, Автобагаж, в Перми, Westfalia, Galia, Imiola, Hak-System, Thule-Brink, Балтекс, Лидер-плюс, Auto-Hak"> 
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/header.html");?>
<div id="leftmenu">
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/leftmenu.html");?>
</div>
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
$audi = [
	[
	'id' => 1,
	'marka' => 'Audi',
	'model' => '80',
	'year' => '1986-1991',
	],
	[
	'id' => 2,
	'marka' => 'Audi',
	'model' => '80',
	'year' => '1991-1995',
	],
	[
	'id' => 3,
	'marka' => 'Audi',
	'model' => '100',
	'year' => '1982-1990',
	],
	[
	'id' => 4,
	'marka' => 'Audi',
	'model' => '100',
	'year' => '1990-1994',
	],
	[
	'id' => 5,
	'marka' => 'Audi',
	'model' => 'A1',
	'year' => '2010-',
	],
	[
	'id' => 6,
	'marka' => 'Audi',
	'model' => 'A3',
	'year' => '1996-2003',
	],
	[
	'id' => 7,
	'marka' => 'Audi',
	'model' => 'A3',
	'year' => '2003-2012',
	],
	[
	'id' => 8,
	'marka' => 'Audi',
	'model' => 'A3',
	'year' => '2012-',
	],
	[
	'id' => 9,
	'marka' => 'Audi',
	'model' => 'A4',
	'year' => '1994-2000',
	],
	[
	'id' => 10,
	'marka' => 'Audi',
	'model' => 'A4',
	'year' => '2000-2004',
	],
	[
	'id' => 11,
	'marka' => 'Audi',
	'model' => 'A4',
	'year' => '2004-2007',
	],
	[
	'id' => 12,
	'marka' => 'Audi',
	'model' => 'A4',
	'year' => '2007-2015',
	],
	[
	'id' => 12,
	'marka' => 'Audi',
	'model' => 'A4',
	'year' => '2015-',
	],
	[
	'id' => 13,
	'marka' => 'Audi',
	'model' => 'A5',
	'year' => '2007-2016',
	],
	[
	'id' => 14,
	'marka' => 'Audi',
	'model' => 'A5',
	'year' => '2016-',
	],
	[
	'id' => 15,
	'marka' => 'Audi',
	'model' => 'A6',
	'year' => '1990-1997',
	],
	[
	'id' => 16,
	'marka' => 'Audi',
	'model' => 'A6',
	'year' => '1997-2004',
	],
	[
	'id' => 17,
	'marka' => 'Audi',
	'model' => 'A6',
	'year' => '2004-2011',
	],
	[
	'id' => 18,
	'marka' => 'Audi',
	'model' => 'A6',
	'year' => '2011-',
	],
	[
	'id' => 19,
	'marka' => 'Audi',
	'model' => 'A6',
	'year' => 'Allroad 2000-2006',
	],
	[
	'id' => 20,
	'marka' => 'Audi',
	'model' => 'A6',
	'year' => 'Allroad 2006-2012',
	],
	[
	'id' => 21,
	'marka' => 'Audi',
	'model' => 'A6',
	'year' => 'Allroad 2012-',
	],
	[
	'id' => 22,
	'marka' => 'Audi',
	'model' => 'A7',
	'year' => 'Sportback 2011-',
	],
	[
	'id' => 23,
	'marka' => 'Audi',
	'model' => 'A8',
	'year' => '1994-2002',
	],
	[
	'id' => 24,
	'marka' => 'Audi',
	'model' => 'A8',
	'year' => '2002-2010',
	],
	[
	'id' => 25,
	'marka' => 'Audi',
	'model' => 'A8',
	'year' => '2010-',
	],
	[
	'id' => 26,
	'marka' => 'Audi',
	'model' => 'Q2',
	'year' => '2017-',
	],
	[
	'id' => 27,
	'marka' => 'Audi',
	'model' => 'Q3',
	'year' => '2011-',
	],
	[
	'id' => 28,
	'marka' => 'Audi',
	'model' => 'Q5',
	'year' => '2008-2016',
	],
	[
	'id' => 29,
	'marka' => 'Audi',
	'model' => 'Q5',
	'year' => '2016-',
	],
	[
	'id' => 30,
	'marka' => 'Audi',
	'model' => 'Q7',
	'year' => '2006-2015',
	],
	[
	'id' => 31,
	'marka' => 'Audi',
	'model' => 'Q7',
	'year' => '2015-',
	],
];



$farkop = $_GET['farkop'];
$model = $_GET['model'];

    if (!isset($farkop)) {
		require('templates/main.php');
    } if ($farkop == 'Audi') {
		require('templates/model.php');
	}if (in_array($model, array('A1', 'A2', 'A3', 'A4')))   {
		require('templates/model1.php');
    }
	

?> 
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>