<?php 
	session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$insertar = "INSERT INTO `productos_funes`(`codigo`, `precio`, `descripcion`,`usuario_id`)
				VALUES('$_POST[codigo]','$_POST[precio]','$_POST[descripcion]','$_SESSION[usuario]')";
	$db->abc($insertar);
	// if (mysqli_error($conn)) {
	// 	print(0);
	// }
?>