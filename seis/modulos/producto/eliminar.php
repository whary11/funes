<?php 
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}
	if (isset($_POST['id_producto'])) {
		require_once("../../controladores/conexion/conn.php");
		$db = new conexion();

		$id = $_POST['id_producto'];

		$eliminar = "DELETE FROM `productos_funes` WHERE id = $id";
		$db->abc($eliminar);
		print(1);
	}else{
		print(0);
	}
?>