<?php 
require 'conexion.php';



$conexion = conexion();

if (!$conexion) {
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];

	$statement = $conexion->prepare(
			'INSERT INTO user (id, nombre , direccion, telefono)
			VALUES (null, :nombre, :direccion, :telefono)'
			);

	$statement->execute(array(
		':nombre'    => $nombre,
		':direccion' => $direccion,
		':telefono'  => $telefono
		)); 

	header('Location: exito.php');

}



 ?>