<?php 
//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

// if(isset($_GET['nombre'])){
// 	$nombre = $_GET['nombre'];
// } else {
// 	$nombre = 'Anonimo';
// }

$nombre = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;	

 ?>