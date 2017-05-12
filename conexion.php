<?php 

function conexion()
{
	$bd_config = array(
	'basedatos' => 'ejemplo_isop',
	'usuario' => 'root',
	'pass' => ''

	);

	/* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];*/

		

		try{
			$conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'] ,  $bd_config['usuario'],  $bd_config['pass']);
			//echo "Conexion ok";
			//echo "". $nombre;
			//echo "". $direccion;
			//echo "". $telefono;

			/* $statement = $conexion->prepare(
				'INSERT INTO user (id, nombre , direccion, telefono)
				VALUES (null, :nombre, :direccion, :telefono)'
				);

			$statement->execute(array(
				':nombre'    => $nombre,
				':direccion' => $direccion,
				':telefono'  => $telefono
				)); 

			

			header('Location: exito.php');*/
			return $conexion;
		
		}catch(PDOException $e){
			return false;
		}

	/*}*/
}

function obtenerRegistros($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM user");
	$sentencia -> execute();
	return $sentencia ->fetchAll();
}

function obtenerModificado($conexion){
	$statament = $conexion->prepare('SELECT * FROM user WHERE id = :id');
	$id =$_GET['id'];


	//$statament->bindParam('nombre_en _bd', $nombre_en_php);
	$statament->bindParam(':id', $id);

	$statament->execute();

	return $resultado = $statament->fetchAll(); 

	//print_r($resultado);
}

