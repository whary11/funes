<?php 
	require_once("../../controladores/conexion/conn.php");
	session_start();
	$db = new conexion();
	// print("Hola Mundo, funciona el código");

	$cliente_id = $_POST["cliente"];
	$total = $_POST['total'];
	$id_presupuesto = "";
	$detalle_presupuesto = $_POST["presupuesto"];

	// var_dump($_POST["presu"]);

	$insertar = "INSERT INTO `presupuestos_funes` (`id`, `cliente_id`, `total`, `usuario_id`, `fecha_creado`) VALUES (NULL, '$cliente_id', '$total', '$_SESSION[usuario]', CURRENT_TIMESTAMP);";
	$db->abc($insertar);

	$buscar="SELECT id FROM presupuestos_funes WHERE id = (SELECT MAX(id) FROM presupuestos_funes)";

	
	if($data = $db->leeTabla($buscar)){

		for ($i=0; $i <count($data); $i++) {
			$id_presupuesto = $data[$i]->id;
		}
		
		for ($i=0; $i<count($detalle_presupuesto[0]); $i++) { 
					$codigo_produ = $detalle_presupuesto[0][$i];
					$cantidad = $detalle_presupuesto[1][$i];
					$precio = $detalle_presupuesto[2][$i];
					$query="INSERT INTO `detalle_presupuesto_funes`(`id`, `id_presupuesto`, `codigo_producto`, `precio`,`cantidad`) VALUES (NULL,'$id_presupuesto','$codigo_produ','$precio','$cantidad')";
					$db->abc($query);			
		}
	 	print(json_encode(array('resp' => true)));	
		///El cero significa que hubo un error
	}else{
		print(json_encode(array('resp' => false)));
	}

	




 ?>