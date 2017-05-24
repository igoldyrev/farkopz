<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
echo "<title>$titleconst Фаркопы для Acura</title>";
?>

<meta name="description" content="Продажа и установка фаркопов Перми для Acura. Пермь, ул. Спешилова 102/29.">
<meta name="keywords" content="Acura, фаркопы, фаркоп, монтаж, ТСУ, прокат, прокат фаркопов, прокат ТСУ, интернет-магазин, продажа в Перми, Пермь, Автобагаж, в Перми, Westfalia, Galia, Imiola, Hak-System, Thule-Brink, Балтекс, Лидер-плюс, Auto-Hak"> 
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/header.html");?>
<div id="leftmenu">
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/leftmenu.html");?>
</div>
<div id="content">
<?php
$mdx = [
	[
		'id' => 1,
		'proizv' => 'Лидер-плюс (Россия)',
		'desc' => 'ТСУ для Acura MDX 2006-2013 без выреза бампера. Нагрузки 1500/75 кг, масса фаркопа 16,5 кг',
		'year' => '2006-2013',
	],
	[
		'id' => 2,
		'proizv' => 'ДЗК (Россия)',
		'desc' => 'Фаркоп Acura MDX 2013- требуется подрезка бампера. Тип шара: E (легкосъемный шар под квадрат)',
		'year' => '2013-',
	],
	[
		'id' => 3,
		'proizv' => 'Bosal (Россия)',
		'desc' => 'Фаркоп на Acura MDX 2014- без выреза в бампере. Тип шара: F. Нагрузки: 2500/100 кг (без электрики в комплекте)',
		'year' => '2014-',
	],
];
$rdx = [
	[
		'id' => 1,
		'proizv' => 'Лидер-плюс (Россия)',
		'desc' => 'ТСУ для Acura RDX 2006-2012 без выреза бампера. Нагрузки 1500/75 кг, масса фаркопа 15 кг',
		'year' => '2006-2013',
	],
	[
		'id' => 2,
		'proizv' => 'ДЗК (Россия)',
		'desc' => 'Фаркоп Acura RDX 2013- без подрезки бампера. Тип шара: E (легкосъемный шар под квадрат)',
		'year' => '2013-',
	],

];
$page = $_GET['page'];

    if (!isset($page)) {
        $auto = ['acura' => Acura, 'mdx' => MDX, 'rdx' => RDX];
		echo '<h1 align="center">Фаркопы для '.$auto ['acura'].'</h1>';
		echo '<h2>Фаркопы для '.$auto ['acura'].' '.$auto ['mdx'].'</h2>';
echo "<table class='producttable'><tr><td class='producttablecaption'>Производитель</td><td class='producttablecaption'>Описание</td><td class='producttablecaption'>Год выпуска</td></tr>";
foreach ($mdx as $farkopmdx) {
echo '<tr><td class="producttable">'.$farkopmdx['proizv'].'</td><td class="producttable">'.$farkopmdx['desc'].'</td><td class="producttable">'.$farkopmdx['year'].'</td></tr>';
}
echo  "</table>";
echo '<h2>Фаркопы для '.$auto ['acura'].' '.$auto ['rdx'].'</h2>';
echo "<table class='producttable'><tr><td class='producttablecaption'>Производитель</td><td class='producttablecaption'>Описание</td><td class='producttablecaption'>Год выпуска</td></tr>";
foreach ($rdx as $farkoprdx) {
echo '<tr><td class="producttable">'.$farkoprdx['proizv'].'</td><td class="producttable">'.$farkoprdx['desc'].'</td><td class="producttable">'.$farkoprdx['year'].'</td></tr>';
}
echo  "</table>";
    } elseif ($page == 'mdx') {
		$auto = ['acura' => Acura, 'mdx' => MDX, 'rdx' => RDX];
        echo '<h2>Фаркопы для '.$auto ['acura'].' '.$auto ['mdx'].'</h2>';
echo "<table class='producttable'><tr><td class='producttablecaption'>Производитель</td><td class='producttablecaption'>Описание</td><td class='producttablecaption'>Год выпуска</td></tr>";
foreach ($mdx as $farkopmdx) {
echo '<tr><td class="producttable">'.$farkopmdx['proizv'].'</td><td class="producttable">'.$farkopmdx['desc'].'</td><td class="producttable">'.$farkopmdx['year'].'</td></tr>';
}
echo  "</table>";
    } elseif ($page == 'rdx') {
		$auto = ['acura' => Acura, 'mdx' => MDX, 'rdx' => RDX];
        echo '<h2>Фаркопы для '.$auto ['acura'].' '.$auto ['rdx'].'</h2>';
echo "<table class='producttable'><tr><td class='producttablecaption'>Производитель</td><td class='producttablecaption'>Описание</td><td class='producttablecaption'>Год выпуска</td></tr>";
foreach ($rdx as $farkoprdx) {
echo '<tr><td class="producttable">'.$farkoprdx['proizv'].'</td><td class="producttable">'.$farkoprdx['desc'].'</td><td class="producttable">'.$farkoprdx['year'].'</td></tr>';
}
echo  "</table>";
    }
?> 
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");?>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>