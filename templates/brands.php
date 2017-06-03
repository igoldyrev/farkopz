<h1 align="center">Каталог брендов</h1>
<?php foreach ($auto as $marka): ?>
<div class="index" id="brands">
	<div align="center"><img class="index" src="<?php echo $marka['img']; ?>"></div>
	<div  align="center"><p><?php echo $marka['marka']; ?></p></div>
</div>
<?php endforeach; ?>