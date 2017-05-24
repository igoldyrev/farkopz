<h1 align="center">Каталог фаркопов</h1>
<?php foreach ($auto as $marka): ?>
<div class="index">
	<div align="center"><a class="index" href="/catalog.php?farkop=<?php echo $marka['marka']; ?>"><img class="index" src="<?php echo $marka['img']; ?>"></a></div>
	<div  align="center"><a href="/catalog.php?farkop=<?php echo $marka['marka']; ?>"><?php echo $marka['marka']; ?></a></div>
</div>
<?php endforeach; ?>