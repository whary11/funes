<?php 
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}
if (isset($_POST['id_cliente'])) {
	$id_cliente = $_POST['id_cliente'];
	$modal="";
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM clientes_funes WHERE id = '$id_cliente'";
	$data = $db->leeTabla($q);
	$modal.= '<form role="form" class="row animated slideInUp" id="editar_cliente" method="POST">
	    <div class="form-group col-md-6 razon">
	        <label for="razon">Razón Social</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="razon" id="razon" value='.$data[0]->razon_social.'>
	    </div>
	    <div class="form-group col-md-6 cuil">
	        <label for="cuil">CUIL o CUIT</label>
	        <input class="form-control limpiar" placeholder="Escribe aquí..." name="cuil" id="cuil" value='.$data[0]->cuit.'>';
	        $q = "SELECT * FROM clientes_funes WHERE id = '$id_cliente'";
                $data = $db->leeTabla($q);
                $tipo_cliente_id = $data[0]->tipo_cliente_id;
                $condicion_iva_id = $data[0]->condicion_iva_id;
  	$modal.='	</div>
	    <div class="form-group col-md-6 cliente">
	        <label for="cliente">Tipo Cliente</label>
	        <select class="form-control" name="cliente" id="cliente">';
        	$q = "SELECT * FROM tipo_cliente";
            $data = $db->leeTabla($q);
            for($i=0;$i<count($data);$i++){ 
            	if ($tipo_cliente_id == $data[$i]->id) {
            	$modal.= '<option selected="selected"  id="'.utf8_encode($data[$i]->id).'" value="'.$data[$i]->id.'">'.utf8_encode($data[$i]->nombre).'</option>';
            	}else{
            		$modal.='<option  id="'.utf8_encode($data[$i]->id).'" value="'.$data[$i]->id.'">'.utf8_encode($data[$i]->nombre).'</option>';
            	}
                    
            }
	 $modal.='</select>
	    </div>';
	   $modal.='	</div>
	    <div class="form-group col-md-6 cliente">
	        <label for="cliente">Tipo Cliente</label>
	        <select class="form-control" name="condicioniva" id="condicioniva">';
	        	$q = "SELECT * FROM condicion_iva";
                $data = $db->leeTabla($q);
                for($i=0;$i<count($data);$i++){ 
                	if ($condicion_iva_id == $data[$i]->id) {
                	$modal.= '<option selected="selected"  id="'.utf8_encode($data[$i]->id).'" value="'.$data[$i]->id.'">'.utf8_encode($data[$i]->nombre).'</option>';
                	}else{
                		$modal.='<option  id="'.utf8_encode($data[$i]->id).'" value="'.$data[$i]->id.'">'.utf8_encode($data[$i]->nombre).'</option>';
                	}
                    
            }
    $q = "SELECT * FROM clientes_funes WHERE id = '$id_cliente'";
	$data = $db->leeTabla($q);
	 $modal.='</select>
	    </div>
	    <div class="form-group col-md-6 direccion">
	        <label for="direccion">Dirección Comercial</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="direccion" id="direccion" value='.$data[0]->domicilio_comercial.'>
	    </div>
	    <div class="form-group col-md-6 correo1">
	        <label for="telefono1">Correo Electrónico 1</label>
	        <input type="email" class="form-control limpiar" placeholder="Escribe aquí..." name="correo1" id="correo1" value='.$data[0]->correo1.'>
	    </div>
		<div class="form-group col-md-6 telefono1">
	        <label for="telefono1">Teléfono 1</label>
	        <input type="phone" class="form-control limpiar" placeholder="Escribe aquí..." name="telefono1" id="telefono1" value='.$data[0]->telefono1.'>
	    </div>
	    <div class="form-group col-md-6 contacto1">
	        <label for="contacto1">Nombre Contacto Principal</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="contacto1" id="contacto1" value='.$data[0]->contacto1.'>
	    </div>
		<div class="form-group col-md-6 whatsapp">
	        <label for="whatsapp">Whatsapp</label>
	        <input type="number" class="form-control limpiar" placeholder="Escribe aquí..." name="whatsapp" id="whatsapp" value='.$data[0]->whatsapp.'>
	    </div>
	    <div class="form-group col-md-6 contacto2">
	        <label for="contacto2">Nombre Contacto 2</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="contacto2" id="contacto2" value='.$data[0]->contacto2.'>
	    </div>
	    <div class="form-group col-md-6 correo2">
	        <label for="correo2">Correo Electrónico 2</label>
	        <input type="email" class="form-control limpiar" placeholder="Escribe aquí..." name="correo2" id="correo2" value='.$data[0]->correo2.'>
	    </div>
	    <div class="form-group col-md-6 telefono2">
	        <label for="telefono2">Teléfono 2</label>
	        <input type="number" class="form-control limpiar" placeholder="Escribe aquí..." name="telefono2" id="telefono2" value='.$data[0]->telefono2.'>
	    </div>
	    <div class="form-group col-md-6 contacto3">
	        <label for="contacto3">Nombre Contacto 3</label>
	        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="contacto3" id="contacto3" value='.$data[0]->contacto3.'>
	    </div>
	    <div class="form-group col-md-6 correo3">
	        <label for="correo3">Correo Electrónico 3</label>
	        <input type="email" class="form-control limpiar" placeholder="Escribe aquí..." name="correo3" id="correo3" value='.$data[0]->correo3.'>
	    </div>

	    <div class="form-group col-md-6 telefono3 limpiar">
	        <label for="telefono3">Teléfono 3</label>
	        <input type="number" class="form-control" placeholder="Escribe aquí..." name="telefono3" id="telefono3" value='.$data[0]->telefono3.'>
	    </div>
	    <div class="col-md-12">
	    	 <input type="hidden" name="id" id="id" value='.$id_cliente.'>
	    	<button type="submit" onclick="editar_cliente();" class="btn btn-primary">
	    		<span class="glyphicon glyphicon-send"></span>
	    		 Guardar
	    	</button>
	    </div>
	</form>';
					
	print($modal);


	
}

?>