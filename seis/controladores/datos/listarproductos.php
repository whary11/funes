<?php 
	require_once("../conexion/conn.php");
	$db = new conexion();
	
	$id = $_POST["id"];
	$q = "SELECT precio FROM productos_funes WHERE (codigo='$id')";
	$data = $db->leeTabla($q);

		for ($i=0; $i <count($data); $i++) {
			$precio = $data[$i]->precio;
		}

		print($precio);
 ?>