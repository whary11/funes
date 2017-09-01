<?php 
	if (isset($_POST['id_producto'])) {
		require_once("../../controladores/conexion/conn.php");
		$db = new conexion();

		$eliminar = "DELETE FROM `productos_funes` WHERE id = '$_POST[id_producto]'";
		$db->abc($eliminar);
	}
?>