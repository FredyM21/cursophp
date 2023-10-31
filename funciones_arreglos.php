<?php 
// $amigo = array('telefono'=> 956555566, 'edad'=> 20, 'pais'=> 'Perú');
// extract($amigo); //Permite extraer los indices o elementos del arreglo como variables.
// echo $telefono; 

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
//$ultimo_dia = array_pop($semana);//array_pop te permite extraer el ultimo elemento del arreglo y lo puedes guardar en una variable  para su posterior uso.

// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }
// echo $ultimo_dia;

// echo join (' - ', $semana);//Recibe 2 parametros, el primero para separar los elementos y el segundo el arreglo. Separa los elementos separados por el elemento que le especificamos. el guion inclusive se podria reemplazar con un salto de linea.  
// echo join('<br />', $semana);
// rsort($semana);

$semana_reverse = array_reverse($semana);
echo join(', ',$semana_reverse);
 ?>