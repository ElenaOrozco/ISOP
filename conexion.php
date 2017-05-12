<?php 
$bd_config = array(
	'basedatos' => 'ejemplo_isop',
	'usuario' => 'root',
	'pass' => ''

);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];

	

	try{
		$conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'] ,  $bd_config['usuario'],  $bd_config['pass']);
		echo "Conexion ok";
		echo "". $nombre;
		echo "". $direccion;
		echo "". $telefono;

		$statement = $conexion->prepare(
			'INSERT INTO user (id, nombre , direccion, telefono)
			VALUES (null, :nombre, :direccion, :telefono)'
			);

		$statement->execute(array(
			':nombre'    => $nombre,
			':direccion' => $direccion,
			':telefono'  => $telefono
			)); 

			$statement = $conexion->prepare(
		'INSERT INTO articulos (id, titulo , extracto, texto, thumb)
		VALUES (null, :titulo, :extracto, :texto, :thumb)'
		);
		
		header('Location: index.php');
	
	}catch(PDOException $e){
		echo "Error: " . $e->getMessage;
	}

}