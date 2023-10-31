<?php 
#string: cadena de texto
$nombre ='fredy';

#integer= Numero entero
$numero = 7;

#double: numero con decimales
$numero_decimal = 7.7;

# boolean: Verdadero o falso (true / false)
$verdadero = true ;

# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando una variable no se de ha asignadoningun  valor

echo $nombre;
echo '<br>';
echo 'hola, ' . $nombre;
echo '<br>';
echo $numero;
echo '<br>';
//funcion que nos sirve para ver el tipo de dato que  tiene una variable
echo gettype($numero_decimal) . ', ' . $numero_decimal;

 ?>