<?php 

//$edad = 18;
//echo isset($edad);
$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';//isset devuelve true o false si la variable que le sigue tiene algun valor(seteada) y nos arrojara 1 o 0 haciendo referencia a true y false.


//if (isset($edad)) {
//	$edad = $edad;
//} else {
//	$edad = 'El usuario no establecio su edad';
//}

Echo 'Edad: '. $edad;


 ?>