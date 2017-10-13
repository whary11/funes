<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}
if (isset($_POST['id_producto'])) {
	$id_producto = $_POST['id_producto'];
	$cod = "";
	$precio = "";
	$descripcion = "";
	$modal="";
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM productos_funes WHERE id = '$id_producto'";
	$data = $db->leeTabla($q);
	for ($i=0; $i <count($data); $i++) {
		$cod = $data[$i]->codigo;
		$precio = $data[$i]->precio;
		$descripcion = $data[$i]->descripcion;
	}

	$modal.= '<form role="form" class="col-lg-12" method="POST" id="formeditar">
				<br>
				    <div class="form-group col-md-12 codigo">
				        <label for="codigo">Código de producto</label>
				        <input type="text" class="form-control" placeholder="Escribe aquí..." name="cod" id="cod" value='.$cod.'>
				    </div>
				    <div class=" col-md-12 precio">
				        <label for="precio">Precio</label>
				        <input type="text" class="form-control" placeholder="Escribe aquí..." name="pre" id="pre" value='.$precio.' >
				    </div>
				    <div class="form-group col-md-12 descripcion">
				        <label for="descripcion">Descripción</label>
				        <textarea class="form-control" name="descrip" id="descrip">'.$descripcion.'
				        </textarea>
				    </div>
				    <input type="hidden" name="bandera">
				    <div class="col-md-10">
				    	 <input type="hidden" name="id" id="id" value='.$id_producto.'>
				    	<button type="submit" onclick="editar_producto();" class="btn btn-primary right">
				    		<span class="glyphicon glyphicon-send"></span>
				    		Editar
				    	</button>
				    </div>
				</form> ';
	print($modal);


	
}

?>