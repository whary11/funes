<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">
	.clda{
		text-align: justify;
		padding:5px;
		font-size: 10px;
		border-right: 1px solid black;
	}


</style>
	<meta charset="UTF-8">
	<title>Perfil[]</title>
</head>
<body>
	<div class="row">
		<div class="col-md-3">
			<p class="text-left lead">Editar perfil</p>
			<div style="border:3px dotted teal;width: auto;padding: 10px;border-radius:10px;" class="col-md-4">
				<img style="display:block;margin: auto;" src="img/luis.jpg" alt="Luis Fernando Raga" width="150px" height="150px" class="img-circle">
			</div>
		</div>
		<div class="col-md-8">
			<p class="lead">Tus datos</p>
			<div>
				<form class="form-inline row">
					<div class="form-group">
						<div class="col-md-6">
							<label for="nombre" class="control-label">Nombre </label>
						  <input type="text" class="form-control" id="nombre">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6">
							<label for="apellidos" class="control-label">Apellidos </label>
						  <input type="text" name="apellidos" class="form-control" id="apellidos">
						</div>
					</div>

				    <div class="form-group">
					    <div class="col-md-6">
					    	<label for="usuario" class="control-label">Usuario </label>
					      <input type="text" name="usuario" class="form-control" id="usuario">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <div class="col-md-6">
					    	<label for="codigo" class="control-label">C. Usuario </label>
					      <input type="text" name="codigo" class="form-control" id="codigo">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <div class="col-md-6">
					    	<label for="correo" class="control-label">Correo </label>
					      <input type="text" name="correo" class="form-control" id="correo">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <div class="col-md-6">
					    	<label for="correo" class="control-label">Correo </label>
					      	<input type="text" name="correo" class="form-control" id="correo">
					    </div>
				  	</div>

				  	<div class="form-group">
					    <div class="col-md-6">
					    <br>
				  			<input type="submit" class="btn btn-primary" value="Actializar">
					    </div>
				  	</div>

				</form>
			</div>
			


		</div>
	</div>
	
</body>
</html>