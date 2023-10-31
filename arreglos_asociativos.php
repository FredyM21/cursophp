<?php 

$alex = array('telefono' => '987654321', 'edad' => 25, 'apellidos' => 'palomino', 'pais' => 'Perú');

echo $alex['telefono'] . '<br />';
echo $alex['edad'] . '<br />';
echo $alex['apellidos'] . '<br />';
echo $alex['pais'] . '<br />';

#tambien poodemos cambiar un valor que ya esta dentro de un arreglo 
$alex['telefono'] = '111111111';
#echo $alex['telefono'];

echo 'El teléfono de Alex es : ' . $alex['telefono'];


 ?>