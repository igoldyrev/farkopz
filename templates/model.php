<h1 align="center">Фаркопы для <?php echo $auto['marka'][1]; ?> </h1>
<?php foreach ($audi as $au): ?>
	<div class="index">
		<a href="/catalog.php?farkop=<?php echo $au['marka']; ?>&model=<?php echo $au['model']; ?>"><?php echo $au['model']; ?></a>
	</div>	
<?php endforeach; ?>