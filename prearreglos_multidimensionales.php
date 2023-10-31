<?php 
//$amigos = array(array('Alejandro', 28 ), array('cesar', 21), array('Manuel', 18));

$amigos = array(
	array('Alejandro', 28 ),
	array('cesar', 21),
	array('Manuel', 18)
);

#echo $amigos[0][0] . '<br />';
#echo $amigos[1][0] . '<br />';
#echo $amigos[2][0] . '<br />';


$data = [
	[
		'nombre'=> 'Fidel Castro Chavez',
		'email'=> 'fidelcaastro@gmail.com',
		'celular'=> '965666554', 
		'direccion' => [ 
			'pais' => 'Perú',
			'Ciudad' => 'Lima'
		]
	],
	[
		'nombre'=> 'Alan Garcia Perez',
		'email'=> 'alangarcia@gmail.com',
		'celular'=> '955555555'
	],
	[
		'nombre'=> 'ALberto Fujimori Fujimori',
		'email'=> 'albertofujimori@gmail.com',
		'celular'=> '977777777'
	],
];

#echo $data[0]['email'];
echo $data[0]['direccion']['pais'];


 ?>