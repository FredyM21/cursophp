<?php 
declare(strict_types=1);//Declarado en modo estricto
function cuadrado(int $numero){
	return $numero * $numero;
}

$numero = 10; //Si estamos trabajando con otras pesonas y comete n el error de colocar una cadena de caracteres '8asd' sale como resultado 'cero' o mensaje de error seguido del resultado esto siqueremos que no debe ser asi, tenemos qu declararlo comoestricto
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);

 