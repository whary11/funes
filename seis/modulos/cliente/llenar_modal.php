<?php 
if (isset($_POST['id_cliente'])) {
	$id_cliente = $_POST['id_cliente'];
	$modal="";
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM clientes_funes WHERE id = '$id_cliente'";
	$data = $db->leeTabla($q);
	for ($i=0; $i <count($data); $i++) {
	$modal.= '<form role="form" class="row animated slideInUp" id="editar_cliente" method="POST">
	    <div class="form-group col-md-6 razon">
	        <label for="razon">Razón Social</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="razon" id="razon" value='.$data[$i]->razon_social.'>
	    </div>
	    <div class="form-group col-md-6 cuil">
	        <label for="cuil">CUIL o CUIT</label>
	        <input class="form-control limpiar" placeholder="Escribe aquí..." name="cuil" id="cuil" value='.$data[$i]->cuit.'>
	    </div>
	    <div class="form-group col-md-6 cliente">
	        <label for="cliente">Tipo Cliente</label>
	        <select class="form-control" name="cliente" id="cliente">
	        	<option>Seleccione un tipo de cliente</option>
	        	<option selected="selected">'.$data[$i]->tipo.'</option>
	            <option>1</option>
	            <option>2</option>
	            <option>3</option>
	        </select>
	    </div>
	    <div class="form-group col-md-6 condicioniva">
	        <label for="condicioniva">Condición IVA</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." id="condicioniva" name="condicioniva" value='.$data[$i]->condicion_iva.'>
	    </div>
	    <div class="form-group col-md-6 direccion">
	        <label for="direccion">Dirección Comercial</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="direccion" id="direccion" value='.$data[$i]->domicilio_comercial.'>
	    </div>
	    <div class="form-group col-md-6 correo1">
	        <label for="telefono1">Correo Electrónico 1</label>
	        <input type="email" class="form-control limpiar" placeholder="Escribe aquí..." name="correo1" id="correo1" value='.$data[$i]->correo1.'>
	    </div>
		<div class="form-group col-md-6 telefono1">
	        <label for="telefono1">Teléfono 1</label>
	        <input type="phone" class="form-control limpiar" placeholder="Escribe aquí..." name="telefono1" id="telefono1" value='.$data[$i]->telefono1.'>
	    </div>
	    <div class="form-group col-md-6 contacto1">
	        <label for="contacto1">Nombre Contacto Principal</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." class="contacto1" id="contacto1" value='.$data[$i]->contacto1.'>
	    </div>
		<div class="form-group col-md-6 whatsapp">
	        <label for="whatsapp">Whatsapp</label>
	        <input type="number" class="form-control limpiar" placeholder="Escribe aquí..." name="whatsapp" id="whatsapp" value='.$data[$i]->whatsapp.'>
	    </div>
	    <div class="form-group col-md-6 contacto2">
	        <label for="contacto2">Nombre Contacto 2</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="contacto2" id="contacto2" value='.$data[$i]->contacto2.'>
	    </div>
	    <div class="form-group col-md-6 correo2">
	        <label for="correo2">Correo Electrónico 2</label>
	        <input type="email" class="form-control limpiar" placeholder="Escribe aquí..." name="correo2" id="correo2" value='.$data[$i]->correo2.'>
	    </div>
	    <div class="form-group col-md-6 telefono2">
	        <label for="telefono2">Teléfono 2</label>
	        <input type="number" class="form-control limpiar" placeholder="Escribe aquí..." name="telefono2" id="telefono2" value='.$data[$i]->telefono2.'>
	    </div>
	    <div class="form-group col-md-6 contacto3">
	        <label for="contacto3">Nombre Contacto 3</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="contacto3" id="contacto3" value='.$data[$i]->contacto3.'>
	    </div>
	    <div class="form-group col-md-6 correo3">
	        <label for="correo3">Correo Electrónico 3</label>
	        <input type="email" class="form-control limpiar" placeholder="Escribe aquí..." name="correo3" id="correo3" value='.$data[$i]->correo3.'>
	    </div>

	    <div class="form-group col-md-6 telefono3 limpiar">
	        <label for="telefono3">Teléfono 3</label>
	        <input type="number" class="form-control" placeholder="Escribe aquí..." name="telefono3" id="telefono3" value='.$data[$i]->telefono3.'>
	    </div>
	    <div class="col-md-12">
	    	 <input type="hidden" name="id" id="id" value='.$id_cliente.'>
	    	<button type="submit" onclick="editar_cliente();" class="btn btn-primary">
	    		<span class="glyphicon glyphicon-send"></span>
	    		 Guardar
	    	</button>
	    </div>
	</form>';
					}
	print($modal);


	
}

?>