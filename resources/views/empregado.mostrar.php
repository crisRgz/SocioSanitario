<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos los libros</title>
</head>
<body>
	<?php foreach ($libros as $libro); ?>
		<p>
			<?php =$libro['name']; ?>, por <?=$libro['author']; ?>
			<br>
			ISBN: <?php =$libro['isbn']; ?>
		</p>
	<?php endforeach ?>
</body>
</html>