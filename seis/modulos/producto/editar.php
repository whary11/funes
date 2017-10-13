<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
} 

	if (isset($_POST["id"])) {
		require_once("../../controladores/conexion/conn.php");
		$db = new conexion();
		$id = $_POST["id"];
		$update = "UPDATE `productos_funes` SET `codigo` = '$_POST[cod]', `precio` = '$_POST[pre]', `descripcion` = '$_POST[descrip]'  WHERE `productos_funes`.`id` = $id;";
		$db->abc($update);
	}
?>
