<?php 
// $numero = 7;//variable global
// function mostrarnumero(){//las funciones no pueden acceder a las variables que estan fuera de la funcion para ello existen los parametros en los cuales podemos accedera ella.
// 	$numero = 10;
// 	return $numero; 
// 	return $numero;//return utilizamos si queremos sacar valores hacia afuera de la funcion.
// }

// echo mostrarnumero();

//Si queremos utilizar una variable dentro de una funcion
##############
// $numero = 7;

// function mostrarnumero($numero){
// 	echo $numero;
// }

// mostrarnumero($numero);

//Si queremos sacar valores de una funcion tenemos que utilizar return
function mostrarnumero(){
	$numero = 10;
	return $numero;
}
echo mostrarnumero();



 ?>|