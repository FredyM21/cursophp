<?php 
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
//esto lo puedes hacer por ejemplo con los meses del año o con cualquier valor que se desee

//Podemos asignar valores nuevos a los arreglos por ejemplo
$semana [10]='FredyMarca';


//Esta en una nueva forma de escribir los arreglos
//$semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

#en los arreglos tambien puedes guardar diferentes valores por ejemplo
$arreglo = array('cadena de caracteres', 1, array('asd', 123), true);

# Para visualizar el valor de un elemento del arreglo escribimos la siguiente sentencia en la cual especificamos el numero de orden segun la lista del arreglo o arrays
//echo $semana [10];


// Para recorrer un arreglo lo podriamos hacer de la siguiente manera
echo $semana [0];// . '<br />';
echo $semana [1];// . '<br />';
echo $semana [2];// . '<br />';
echo $semana [3];// . '<br />';
echo $semana [4];// . '<br />';
echo $semana [5];// . '<br />';
echo $semana [6];// . '<br />';


 ?>