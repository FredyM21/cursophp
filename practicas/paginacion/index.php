<?php
try {
	$conexion = new PDO('mysql:host=localhost;dbname=curso_paginacion', 'root', '');
} catch (PDOException $e) {
	echo "ERROR: ". $se->getMessage();
	die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;
$articulos = $conexion->prepare("
	SELECT * FROM articulos 
	LIMIT $inicio, $postPorPagina
	");

$articulos->execute();
$articulos = $articulos->fetchall();

if (!$articulos) {
	header('Location: index.php');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() AS total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPaginas = ceil($totalArticulos / $postPorPagina);

require 'index.view.php';

?>