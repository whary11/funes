<?php 
	require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM clientes_funes";
	$data = $db->leeTabla($q);

	print("Conexión funcionado, tenemos <b>".count($data). "</b> clientes registrados");
 ?>