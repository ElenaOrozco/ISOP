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
	<div class="container w-50 m-5 p-5">

		<form action="conexion.php" method="POST">
			<div class="form-group row">
			  <label for="nombre" class="col-2 col-form-label">Nombre</label>
			  <div class="col-10">
			    <input class="form-control" type="name" id="nombre" name="nombre" placeholder="Nombre">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="direccion" class="col-2 col-form-label">Direccion</label>
			  <div class="col-10">
			    <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="telefono" class="col-2 col-form-label">Telefono</label>
			  <div class="col-10">
			    <input class="form-control" type="text" id="telefono" name="telefono" placeholder="Telefono">
			  </div>
			</div>

			
			<button type="submit" class="btn btn-info">Guardar</button>
		</form>
		
		
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>