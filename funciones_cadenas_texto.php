<?php 
// $texto = '< > & "" ';
// $texto = '<b>Hola</b>';
$texto = 'Hola Carlos';

// echo $texto; 
// echo htmlspecialchars($texto); //convierte caracteres especiales en entidades HTML para que no se ejecuten en el navegador y asi se evita que los usuarios no puedan inyectar codigo en nuestros sitios web.
// echo trim($texto);//Eliminar espacios en blanco al inicio y al final.
// echo strlen($texto); //Permite calcular el tamaño de una cadena de texto.
// echo substr($texto, 0 , 4); //Retorna un pedaso de una linea de una cadena texto.
// echo strtoupper($texto);//Convierte una cadena de texto a mayúsculas
// echo strtolower($texto);//convierte una cadena de texto  minuscula
echo strpos($texto, 'a'); //muestra en que posicion esta la letra colocada en el parametro.

 ?>