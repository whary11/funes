<?php 
	 require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	// $array = [];
	$id = $_POST["id"];
<<<<<<< HEAD
	$q = "SELECT precio,codigo FROM productos_funes WHERE (id='$id')";
	$data = $db->leeTabla($q);

		for ($i=0; $i <count($data); $i++) {
			$precio = $data[$i]->precio;
			$codigo = $data[$i]->codigo;
		}
		print($precio);
		// $array = array(0=> $precio, 1 => $codigo );
		// echo json_encode($array);
		// var_dump($array);
=======
	$q = "SELECT precio FROM productos_funes WHERE (id='$id')";
	if($data = $db->leeTabla($q)){
		
		for ($i=0; $i <count($data); $i++) {
			$precio = $data[$i]->precio;
		}		
		print($precio);
	}else{
		print(1);
		
	}


>>>>>>> e791108aff4c241c8cbfffe0f2eb4e846e59b584
 ?>