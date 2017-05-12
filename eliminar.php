<?php 
require 'conexion.php'; 
$conexion = conexion();
if ( !$conexion) {
	header ('Location: error.php');

}
else {
	$id = $_GET['id'];
	    
	 $exito='';  
	 $errores='';
	 
	$sth = $conexion->prepare('DELETE FROM user WHERE id = :id');
	 

	 
	$sth->bindParam(':id', $id);

	$sth->execute();

	header('location: index.php');
	}
?>