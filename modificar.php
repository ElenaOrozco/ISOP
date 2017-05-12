<?php 
require 'conexion.php'; 

$conexion = conexion();
if ( !$conexion) {
	header ('Location: error.php');

}
else {
	$users = obtenerRegistros($conexion);
	$user_modificar = obtenerModificado($conexion);
	//print_r($user_modificar[0]['nombre']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">

</head>
<body>
	<div class="container my-5 ">

		<form class ="p-5 mb-5" action="mod.php" method="POST">
			
			<input type="hidden" id="id" name="id"  value="<?php echo $user_modificar[0]['id'];?>">
			 
		
			<div class="form-group row">
			  <label for="nombre" class="col-md-2 col-form-label">Nombre</label>
			  <div class="col-md-10">
			    <input class="form-control" type="name" id="nombre" name="nombre"  value="<?php echo $user_modificar[0]['nombre'];?>">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="direccion" class="col-md-2 col-form-label">Direccion</label>
			  <div class="col-md-10">
			    <input class="form-control" type="text" id="direccion" name="direccion" value="<?php echo $user_modificar[0]['direccion'];?>">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="telefono" class="col-md-2 col-form-label">Telefono</label>
			  <div class="col-md-10">
			    <input class="form-control" type="text" id="telefono" name="telefono" value="<?php echo $user_modificar[0]['telefono'];?>">
			  </div>
			</div>
			
			<a href="index.php" class="btn btn-danger">Cancelar</a>
			<button type="submit" class="btn btn-success">Modificar</button>
			
		</form>

		<table class="table table-responsive">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Nombre</th>
		      <th>Dirección</th>
		      <th>Telefono</th>
		      <th></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 

                foreach ($users as $key => $value) {  ?>
                    <tr>
                    	<td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['nombre']; ?></td>
                        <td><?php echo $value['direccion']; ?></td>
                        <td><?php echo $value['telefono']; ?></td>
                        <td  class="d-flex">
                            <!--?id=1-->
                            <a href="articulo_modificar.php?id=<?php echo $value['id']; ?>" class="btn btn-warning mx-1"><i class="fa fa-pencil fa-2x"></i>Modificar</a>
                            <a href="eliminar.php?id=<?php echo $value['id'];?>"class="btn btn-danger">
                                <i class="fa fa-trash fa-2x"></i>Eliminar
                            </a>
                        </td>
                        
                    </tr>

                    <?php 
                }

            ?>
                                            
		  </tbody>
		</table>
		
		
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>