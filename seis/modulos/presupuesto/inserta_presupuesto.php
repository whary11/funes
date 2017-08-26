<?php 
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	// print("Hola Mundo, funciona el código");

	$cliente_id = $_POST["cliente"];
	$total = $_POST['total'];
	$id_presupuesto = "";
	$detalle_presupuesto = $_POST["presupuesto"];

	$insertar = "INSERT INTO `presupuestos_funes` (`id`, `cliente_id`, `total`, `nombre_creador`, `fecha_creado`) VALUES (NULL, '$cliente_id', '$total', 'Luis Raga', CURRENT_TIMESTAMP);";
	$db->abc($insertar);

	$buscar="SELECT id FROM prsupuestos_funes WHERE id = (SELECT MAX(id) FROM presupuestos_funes)";
	if($data = $db->leeTabla($buscar)){

		for ($i=0; $i <count($data); $i++) {
			$id_presupuesto = $data[$i]->id;
		}
		
		for ($i=0; $i<count($detalle_presupuesto[0]); $i++) { 
					$id_produ = $detalle_presupuesto[0][$i];
					$precio = $detalle_presupuesto[1][$i];
					$query="INSERT INTO `detalle_presupuesto_funes`(`id`, `id_presupuesto`, `id_producto`, `precio`) VALUES (NULL,'$id_presupuesto','$id_produ','$precio')";
					$db->abc($query);	
						
		}
		var_dump($precio);
		///El cero significa que hubo un error
	}else{
		print(0);
	}

	




 ?>