<h1 align="center">Фаркопы для <?php echo $auto['model']; ?> </h1>
<?php foreach ($audi as $au): ?>
		<a href="/catalog.php?farkop=<?php echo $au['marka']; ?>&model=<?php echo $au['model']; ?>"><?php echo $au['model']; ?></a>
<?php endforeach; ?>