<?php
	$iva=$_POST['condicioniva'];
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	date_default_timezone_set('UTC');
	$hoy = date("Y-m-d H:i:s");
	$insertar = "INSERT INTO `clientes_funes`(`id`, `razon_social`, `cuit`, `tipo`, `condicion_iva`, `domicilio_comercial`, `correo1`, `telefono1`, `contacto1`, `whatsapp`, `contacto2`, `correo2`, `telefono2`, `contacto3`, `correo3`, `telefono3`, `cargado_por`, `comentarios`, `fecha_cargue`, `fecha_modificacion`) 
		VALUES (NULL,'$_POST[razon]','$_POST[cuil]','$_POST[cliente]','$_POST[condicioniva]','$_POST[direccion]','$_POST[correo1]','$_POST[telefono1]','$_POST[contacto1]','$_POST[whatsapp]','$_POST[contacto2]','$_POST[correo2]','$_POST[telefono2]','$_POST[contacto3]','$_POST[correo3]','$_POST[telefono3]','Luis Fernando Raga','Test de prueba','$hoy','0000-00-00')";
	$db->abc($insertar);
	if (mysqli_error($conn)) {
		print(0);
	} 
?>