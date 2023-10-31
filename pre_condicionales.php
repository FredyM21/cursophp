<?php 

/* Operadores de comparacion:
== igualdad
< menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negaccion

*/

/* Operadores logicos
&& - Evalua que se cumpla las 2 condiciones
||, OR - Evalua que se cumpla al menos una  		condicion (alt + 124) = ||
xor - Evalua que se cumpla una y solo una 		condicion.

*/


//$edad = 18;

//if ($edad >= 18) {
	# code...
//	echo '<h1> Bienvenido </h1>';
//}
//if ($edad < 18) {
//	echo '<h1> Eres Menor de edad </h1>';
//}

$sexo = 'M';

if ($sexo='M') {
	echo 'masculino'
}

if ($sexo != 'M'){
	echo 'femenino'
}

$edad = 16;
$nombre = 'Carlos';

if ($edad >= 18 || $nombre == 'Carlos') {
	echo '<h1> Bienvenido </h1>';
}
//if ($edad < 18 or $nombre != 'Carlos') {
//	echo '<h1> Eres Menor de edad y/o no te llamas Carlos </h1>';
//}

 ?>