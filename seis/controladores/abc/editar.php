

<?php 

	if (isset($_GET["id"])) {
		require_once("../conexion/conn.php");
		$db = new conexion();
		$id = $_GET["id"];
		
		if(isset($_POST["bandera"])){
			$codigo = $_POST["codigo"];
			$precio = $_POST["precio"];
			$descripcion = $_POST["descripcion"];
			$update = "UPDATE `productos_funes` SET `codigo` = '$codigo', `precio` = '$precio', `descripcion` = '$descripcion'  WHERE `productos_funes`.`id` = $id;";
			$db->abc($update);
		// Leer nuevamente la tabla
			$q = "SELECT * FROM productos_funes WHERE(id=$id)";
			$data = $db->leeTabla($q);
			$mensaje="<div class='alert alert-success col-md-10'>Actualización realizada con éxito.</div>";
			$q = "SELECT * FROM productos_funes WHERE(id=$id)";
	?>
<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Editar producto</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link href="../../vendor/app/css/animate.css" rel="stylesheet">
    	<script src="../vendor/jquery/jquery.min.js"></script>
    	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body class="container">
			<section class="row">
				<form role="form" class=" animated bounceIn col-lg-8" method="POST">
				<?php 
					if (isset($mensaje)) {
						print($mensaje);
					}
				 ?>
				<br>
					<div class="col-md-10">
							<h3>Editar Produscto</h3>
					        
				    </div>
				    <div class="form-group col-md-10 codigo">
				        <label for="codigo">Código de producto</label>
				        <input type="text" class="form-control" placeholder="Escribe aquí..." name="codigo" id="codigo" value="<?php print($data[0]->codigo) ?>">
				    </div>
				    <div class="form-group col-md-10 precio">
				        <label for="precio">Precio</label>
				        <input type="text" class="form-control" placeholder="Escribe aquí..." name="precio" id="precio" value="<?php print($data[0]->precio) ?>" >
				    </div>
				    <div class="form-group col-md-10 descripcion">
				        <label for="descripcion">Descripción</label>
				        <textarea class="form-control" name="descripcion" id="descripcion">
				        	<?php print($data[0]->descripcion) ?>
				        </textarea>
				    </div>
				    <input type="hidden" name="bandera">
				    <div class="col-md-10">
				    	<button type="submit" class="btn btn-primary">
				    		<span class="glyphicon glyphicon-send"></span>
				    		 Guardar
				    	</button>
				    </div>
				</form>
			</section>
			<br><br>
			<div>
				<a href="../../pages">Volver a productos</a>
			</div>
	</body>
	</html>

<?php
	}else{
		$q = "SELECT * FROM productos_funes WHERE(id=$id)";
		$data = $db->leeTabla($q);
 ?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Editar producto</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link href="../../vendor/app/css/animate.css" rel="stylesheet">
    	<script src="../vendor/jquery/jquery.min.js"></script>
    	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<section class="row">
				<form role="form" class="row animated bounceIn col-lg-8" method="POST">
				<?php 
					if (isset($mensaje)) {
						print($mensaje);
					}
				 ?>
				<br>
					<div class="col-md-10">
							<h3>Editar Produscto</h3>
					        
				    </div>
				    <div class="form-group col-md-10 codigo">
				        <label for="codigo">Código de producto</label>
				        <input type="text" class="form-control" placeholder="Escribe aquí..." name="codigo" id="codigo" value="<?php print($data[0]->codigo) ?>">
				    </div>
				    <div class="form-group col-md-10 precio">
				        <label for="precio">Precio</label>
				        <input type="text" class="form-control" placeholder="Escribe aquí..." name="precio" id="precio" value="<?php print($data[0]->precio) ?>" >
				    </div>
				    <div class="form-group col-md-10 descripcion">
				        <label for="descripcion">Descripción</label>
				        <textarea class="form-control" name="descripcion" id="descripcion">
				        	<?php print($data[0]->descripcion) ?>
				        </textarea>
				    </div>
				    <input type="hidden" name="bandera">
				    <div class="col-md-10">
				    	<button type="submit" class="btn btn-primary">
				    		<span class="glyphicon glyphicon-send"></span>
				    		 Guardar
				    	</button>
				    </div>
				</form>
			</section>
			<br><br>
			<div>
				<a href="../../pages">Volver a productos</a>
			</div>
		</div>
	</body>
	</html>

	<?php
	} 
	}else{
		header("location: ../../pages/");
	}

	 ?>