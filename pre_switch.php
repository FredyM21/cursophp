<?php 

/*switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}*/

$mes = ' Diciembre';

switch ($mes) {
	case 'Diciembre':
		echo 'Feliz Navidad';
		break; #importante colocar 'break' al final de cada caso que tengamos ya que si no lo colocamos la sentencia seguira buscando.
	case 'Enero':
		echo 'Feliz año nuevo';
		break;	
	
	default:  #Se ejecuta en caso de que ninguno de los casos aya sido exitoso.
		echo 'En este mes no se celebra nada'
		break;
}



 ?>