<?php 
	$meses=array('Enero', 'Febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'setiembre', 'octubre', 'noviembre', 'diciembre', 'as', 'assd');



//echo count($meses);
/*
for ($i=0; $i < count($meses); $i++) { 
	echo $meses[$i] . '<br />';
}
*/

$contador = 0;
while ($contador < count($meses)) {
	echo $meses[$contador] . '<br />';

	$contador++;
}

 ?>