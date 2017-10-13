<?php 
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}
	if (isset($_POST["id"])) {
		require_once("../../controladores/conexion/conn.php");
		$db = new conexion();
		$id = $_POST["id"];
		date_default_timezone_set('UTC');
		$hoy = date("Y-m-d H:i:s");
		$update = "UPDATE `clientes_funes` SET `razon_social`='$_POST[razon]',`cuit`='$_POST[cuil]',`tipo_cliente_id`='$_POST[cliente]',`condicion_iva_id`='$_POST[condicioniva]',`domicilio_comercial`='$_POST[direccion]',`correo1`='$_POST[correo1]',`telefono1`='$_POST[telefono1]',`contacto1`='$_POST[contacto1]',`whatsapp`='$_POST[whatsapp]',`contacto2`='$_POST[contacto2]',`correo2`='$_POST[correo2]',`telefono2`='$_POST[telefono2]',`contacto3`='$_POST[contacto3]',`correo3`='$_POST[correo3]',`telefono3`='$_POST[telefono3]',`fecha_modificacion`='$hoy' WHERE id = '$id'";
		$db->abc($update);
	}
?>