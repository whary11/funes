	<?php
		require_once("controladores/conexion/conn.php"); 
		$q = "SELECT * FROM `usuarios_funes` WHERE id=1 ";
		$db = new conexion();
		$data = $db->leeTabla($q);
	 ?>
	<div class="row">
		<div class="col-md-3">
			<p class="text-left lead">Editar perfil</p>
			<div style="border:3px dotted teal;width: auto;padding: 10px;border-radius:10px;" class="col-md-4" id="contenedorIMG">
			<div id="resultimage">
				
				<img style='display:block;margin:auto;' src="img/perfiles/<?php print($data[0]->img); ?>" alt="Luis Fernando Raga" width='200px' height='200px' class='img-circle'>
			</div>
				<form id="actualizaImg">
					<label for="imagen" class="btn btn-success" style="display: block;width:50%;margin: 5px auto;">Cambiar</label>
					<input type="file" name="imagen" id="imagen" style="display: none">
					<div>
						<p id="infoImage" style="text-align: center;"></p>	
					</div>
					<div id="boton">
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-8">
			<p class="lead">Tus datos</p>
			<div>
				<form class="form-vertical row" id="perfil-user">
					<div class="form-group col-md-6 nombre">
						<label for="nombre" class="control-label">Nombre </label>
						<input type="text" class="form-control" id="nombre" value="<?php print($data[0]->nombre); ?>">
					</div>

					<div class="form-group col-md-6 apellidos">
						<label for="apellidos" class="control-label">Apellidos </label>
					  	<input type="text" name="apellidos" class="form-control" id="apellidos" value="<?php print($data[0]->apellidos); ?>">
					</div>

				    <div class="form-group col-md-6 usuario">
					    <label for="usuario" class="control-label">Usuario </label>
					    <input type="text" name="usuario" class="form-control" id="usuario" value="<?php print($data[0]->usuario); ?>">
				  	</div>
				  	<div class="form-group col-md-6 sistema">
					    <label for="sistema" class="control-label">Sistema </label>
				    	<select class="form-control" id="sistema" name="sistema">
						  <option value="id">Funes</option>
						  <option value="id">Agrocentro</option>
						</select>
				  	</div>
				  	<div class="form-group col-md-6 cargo">
				    	<label for="cargo" class="control-label">Cargo </label>
					    <input type="text" name="cargo" class="form-control" id="cargo" value="<?php print($data[0]->cargo); ?>">
				  	</div>
				  	<div class="form-group col-md-6 correo">
				    	<label for="correo" class="control-label">Correo </label>
					    <input type="email" name="correo" class="form-control" id="correo" value="<?php print($data[0]->correo); ?>">
				  	</div>

				  	<div class="form-group col-md-6 biografia">
				     	<label for="biografia" class="control-label">Biografía </label>
			  			<textarea class="form-control" name="biografia" cols="3" rows="3" id="biografia">
			  				<?php print($data[0]->biografia);?>
			  			</textarea>
					</div>
					<div class="form-group col-md-6 codigo">
				    	<label for="codigo" class="control-label">Código </label>
				      	<input type="text" name="codigo" class="form-control" id="codigo" value="<?php print($data[0]->codigo); ?>" disabled>
				  	</div>
				  	<div class="form-group col-md-6">
					    <button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/accion_perfil.js"></script>
