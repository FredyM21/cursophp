<?php 

$meses = array(
		'enero', 'febrero', 'marzo', 'abril', 
		'mayo', 'junio', 'julio', 'agosto', 
		'setiembre', 'octubre', 'noviembre', 'diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

//sort($meses);
//rsort($meses);

foreach ($meses as $mes) {
	# code...
	echo $mes . '<br />';
}

?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meses del año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<?php 
		//foreach ($meses as $value) {
			# code...
		//	echo '<li>' . $value . '</li>';
		//}


		 ?>
	</ul>
</body>
</html>
-->