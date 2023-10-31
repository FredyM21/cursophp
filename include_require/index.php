<?php 

function suma($numero, $numero2){
	return $numero + $numero2;
}
//include 'vistaaaa.php';//Probar primero de la  forma correcta vista.php 
#####require 'vistaaa.php';

include_once 'vista.php';//esto permite que se llame solo una vez la linea de codigo, si no le colocamos el once se ejecutara 2 veces.
include_once 'vista.php';

//echo "<b>Hola</b>";	

//si la llamada al archivo es errado con require sale un mensaje de FATAL ERROR Y DEJA DE EJECUTARSE. y si la el error es usando include sale un mensaje de WARNING, pero el resto del codigo sigue ejecutandose. se puede decir que el require es para archivos mas imprtantes y el include no.

?>