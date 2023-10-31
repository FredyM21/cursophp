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



//$edad = 16;
/*
if ($edad>=18) {
	echo '<h1> Bienvenido </h1>';
}
if ($edad<18) {
	echo '<h1> Eres menor de edad </h1>';
}
*/
/*$sexo = 'T';

if ($sexo =='M') {
	echo '<h1> MASCULINO </h1>';
}
if ($sexo !='M') {
	echo '<h1> FEMENINO </h1>';
}
*/

$edad = 20;
$nombre = 'Juan';

/* if ($edad >= 18 || $nombre == 'Carlos') {
	echo '<h1> Binenvenido </h1>';
}
*/
if ($edad < 18 or $nombre != 'Carlos') {
	echo '<h1> Eres menor de edad y/o no te llamas carlos </h1>';
}











 ?>