<?php 
	require_once("../conexion/conn.php");
	$db = new conexion();
	// print("Hola Mundo, funciona el código");

	$cliente_id = $_POST["cliente"];
	$total = $_POST['total'];

	$sql = "INSERT INTO `presupuestos_funes` (`id`, `cliente_id`, `total`, `nombre_creador`, `fecha_creado`) VALUES (NULL, '$cliente_id', '$total', 'Luis Raga', CURRENT_TIMESTAMP);";
	$db->abc($sql);

	$sql="";
		
	

	// print($total);




 ?>