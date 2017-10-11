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
			if(count($data)<1){
				$html .='
                <div class="card controlbuscador">
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">No hay clinetes resgistrodos.</li>
				  </ul>
				</div>';
			}else{
				for ($i=0; $i<count($data); $i++) {
			            $html .='
			            <div class="card controlbuscador">
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item">'.$data[$i]->razon_social.'</li>
						  </ul>
						</div>';
				}
			}
		print($html);
	}else{
		header("Location:../../pages");
	}
 ?>
