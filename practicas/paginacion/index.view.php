<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Paginacion</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="contenedor">
		<h1>Artículos</h1>
		<section class="articulos">
			<ul>
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'] . '.- ' . $articulo['articulo'] ?></li>					
				<?php endforeach ?>
			</ul>
		</section>

		<section class="paginacion">
			<ul>
				<li class="disabled">&laquo;</li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</section>
	</div>
</body>
</html>