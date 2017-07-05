<?php 
	require_once("../conexion/conn.php");
	$db = new conexion();
	$producto = $_POST["producto"];
	$q = "SELECT * FROM productos_funes WHERE (codigo='$producto')";
	$data = $db->leeTabla($q);

	$datosJSon =  array();
		for ($i=0; $i <count($data); $i++) {
			$incluye = array("codigo" => $data[$i]->codigo, "precio" => $data[$i]->precio, "descripcion" =>$data[$i]->descripcion);
			array_push($datosJSon, $incluye);
		}

		// var_dump($datosJSon);
	print(json_encode($datosJSon));
 ?>