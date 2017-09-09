
	<div class="row">
		<div class="col-md-3">
			<p class="text-left lead">Editar perfil</p>
			<div style="border:3px dotted teal;width: auto;padding: 10px;border-radius:10px;" class="col-md-4">
				<img style="display:block;margin: auto;" src="img/luis.jpg" alt="Luis Fernando Raga" width="200px" height="200px" class="img-circle">
			</div>
		</div>
		<div class="col-md-8">
			<p class="lead">Tus datos</p>
			<div>
				<form class="form-vertical row" id="perfil-user">
					<div class="form-group col-md-6 nombre">
						<label for="nombre" class="control-label">Nombre </label>
						<input type="text" class="form-control" id="nombre">
					</div>

					<div class="form-group col-md-6 apellidos">
						<label for="apellidos" class="control-label">Apellidos </label>
					  	<input type="text" name="apellidos" class="form-control" id="apellidos">
					</div>

				    <div class="form-group col-md-6 usuario">
					    <label for="usuario" class="control-label">Usuario </label>
					    <input type="text" name="usuario" class="form-control" id="usuario">
				  	</div>
				  	<div class="form-group col-md-6 sistema">
					    <label for="correo" class="control-label">Sistema </label>
				    	<select class="form-control" id="sistema" name="sistema">
						  <option value="id">Funes</option>
						  <option value="id">Agrocentro</option>
						</select>
				  	</div>
				  	<div class="form-group col-md-6 cargo">
				    	<label for="cargo" class="control-label">Cargo </label>
					    <input type="text" name="cargo" class="form-control" id="cargo">
				  	</div>
				  	<div class="form-group col-md-6 correo">
				    	<label for="correo" class="control-label">Correo </label>
					    <input type="email" name="correo" class="form-control" id="correo">
				  	</div>

				  	<div class="form-group col-md-6 biografia">
				     	<label for="biografia" class="control-label">Biografía </label>
			  			<textarea class="form-control" name="biografia" cols="3" rows="3" id="biografia"></textarea>
					</div>
					<div class="form-group col-md-6 codigo">
				    	<label for="codigo" class="control-label">Código </label>
				      	<input type="text" name="codigo" class="form-control" id="codigo" value="1040" disabled>
				  	</div>
				  	<div class="form-group col-md-6">
					    <button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</form>
				<div class="alert col-md-12" role="alert" id="resp">
				  <!-- This is a info alert—check it out! -->
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/accion_perfil.js"></script>
