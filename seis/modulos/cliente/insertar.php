<?php
	session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}
	$iva=$_POST['condicioniva'];
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	date_default_timezone_set('UTC');
	$hoy = date("Y-m-d H:i:s");
	$insertar = "INSERT INTO `clientes_funes`(`id`, `razon_social`, `cuit`, `tipo_cliente_id`, `condicion_iva_id`, `domicilio_comercial`, `correo1`, `telefono1`, `contacto1`, `whatsapp`, `contacto2`, `correo2`, `telefono2`, `contacto3`, `correo3`, `telefono3`, `usuario_id`, `comentarios`, `fecha_cargue`, `fecha_modificacion`) 
		VALUES (NULL,'$_POST[razon]','$_POST[cuil]','$_POST[cliente]','$_POST[condicioniva]','$_POST[direccion]','$_POST[correo1]','$_POST[telefono1]','$_POST[contacto1]','$_POST[whatsapp]','$_POST[contacto2]','$_POST[correo2]','$_POST[telefono2]','$_POST[contacto3]','$_POST[correo3]','$_POST[telefono3]','$_SESSION[usuario]','Test de prueba','$hoy','0000-00-00')";
	$db->abc($insertar);
	print(
		json_encode(array('resp'=>true))
	);
?>