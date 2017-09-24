<?php
	if (isset($_POST["valorBus"])) {
		require_once("../conexion/conn.php");
		$valor = $_POST["valorBus"];
		$db = new conexion();
		$q = "SELECT * FROM clientes_funes WHERE razon_social LIKE '%$valor%' or cuit LIKE '%$valor%' or correo1 LIKE '%$valor%' or contacto1 LIKE '%$valor%'";
		// print($q);
		$data = $db->leeTabla($q);
		$datosJSon =  array();
			$html = '';
		for ($i=0; $i<count($data); $i++) {
                $html .='


                <div class="card controlbuscador">
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">'.$data[$i]->razon_social.'</li>
				  </ul>
				</div>';
		}
		print($html);
	}else{
		header("Location:../../pages");
	}
 ?>

 <!-- <div class="resultadoBus animated bounceIn"><p>'.$data[$i]->razon_social.'</p><span><b>'.$data[$i]->cuit.'</span></b><div><hr> -->