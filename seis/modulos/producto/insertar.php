<?php 
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$insertar = "INSERT INTO `productos_funes`(`codigo`, `precio`, `descripcion`)
				VALUES('$_POST[codigo]','$_POST[precio]','$_POST[descripcion]')";
	$db->abc($insertar);
	// if (mysqli_error($conn)) {
	// 	print(0);
	// }
?>