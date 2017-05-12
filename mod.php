<?php 
require 'conexion.php'; 
$conexion = conexion();
if ( !$conexion) {
	header ('Location: error.php');

}
else {
	$id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    
 	//print_r($nombre);
 	//print_r($id);
	$sth = $conexion->prepare('UPDATE user set nombre = :nombre, direccion = :direccion, telefono = :telefono WHERE id = :id');

	 
	$sth->bindParam(':id', $id);
	$sth->bindParam(':nombre', $nombre);
	$sth->bindParam(':direccion', $direccion);
	$sth->bindParam(':telefono', $telefono);
	 
	 
	$sth->execute();
 	header('location: index.php');
}

?>