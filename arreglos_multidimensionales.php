<?php 
$amigos = array(array('Alejandro', 28 ), array('cesar', 21), array('Manuel', 18));

//echo $amigos[0][0] . '<br />';
//echo $amigos[1][0] . '<br />';
//echo $amigos[2][0] . '<br />';

$data = [
	[
		'nombre' => 'Fidel Castro Chavez', 
		'email' => 'fidelcastro@gmail.com', 
		'celular' => '965666666', 
		'direccion' => [
			'pais'=> 'Perú', 
			'ciudad' => 'Puquio'
		]
	], 
	[
		'nombre' => 'Alan Garcia Perez', 
		'email' => 'alangarcia@gmail.com', 
		'celular' => '97777777'
	],
	[
		'nombre' => 'Alberto Fujimori Fujimori', 
		'email' => 'albertofujimori@gmail.com', 
		'celular' => '988888888'
	],

];
//echo $data[0]['email'];
echo $data[0]['direccion']['pais'];





 ?>
