<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}
	if (isset($_POST['id_cliente'])) {
		require_once("../../controladores/conexion/conn.php");
		$db = new conexion();

		$eliminar = "DELETE FROM `clientes_funes` WHERE id = '$_POST[id_cliente]'";
		$db->abc($eliminar);

		print('arg');
	}
?>