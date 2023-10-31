<?php 

/* Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División
% 	Modulo (la diferencia que tenemos en un division)


$numero = 10;
$numero2 = 6;

$resultado = $numero % $numero2;
echo $resultado;
*/
/* Operadores de Asignación:

= 
+= 
-=
*=
/=

-- */

// $numero = 10;
// $numero2 = 5;

//$numero = $numero + 7;
//$numero += 7; //(Toma el valor de $numero y añadele 7 tambien de puede hacer con -=, *= y /=)
//echo $numero;

/****** Operadores de Comparación:

== 	(Igualdad)
=== (Identico en comparacion en valor y tipo de dato)
!=, <>
!==
>
<
>=
<=

-- */
// $numero = 10;

// if ($numero == 10) {
// 	echo "string";
// }

/*$numero = '10'; // String

if ($numero === 10) {
echo 'Es Identico';
}else {
echo 'Es diferente';
}
*/

/*
$variable = 'true';

 if ($variable === true) {  //cambiar == por ===
 	echo 'Es Identico';
 } else {
	echo 'Es Diferente';
}
*/

/********* Operadores Lógicos:

and, &&
or, ||
xor
!

-- */
// $numero = 10;

// if ($numero >= 10 && $numero < 20) {
// 	echo "Ejecuta";
// }

/******Operadores de Incremento / Decremento:******** (Su funcion es agregar unidades de una en una a nuestras variables)

++$x
$x++ (Incrementar en una unidad ++)
--$x 
$x-- (Decrementan en una unidad --)

-- */

#####$numero = 10;
// $numero = $numero + 1; //(Incremetarle en una unidad)
// $numero += 1; //(Esta es para decirle que el numero se incremente en uno)

#####$numero++; //++$numero
#####Echo $numero;

// echo $numero--;
// echo "<br />";
// echo $numero;

/* Operadores de Cadenas:
.
.=

-- */

$texto = 'Cadena de Texto';
$texto .= ' Una segunda Cadena de Texto'; // se puede interpretar como añadele al texto este otr texto concatenandolo

//echo $texto;

?>