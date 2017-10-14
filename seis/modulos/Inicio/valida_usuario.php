
 <?php 
 session_start();
if (isset($_POST["usuario"])) {
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];
	$q = "SELECT * FROM usuarios_funes WHERE usuario = '$usuario' AND clave = '$clave'";
	$data = $db->leeTabla($q);
	if (count($data)>0) {
		for ($i=0; $i <count($data); $i++) {   
			$_SESSION["usuario"]= $data[$i]->id;
		}
		print(json_encode(array('resp'=>true)));
	 }else{
		print(json_encode(array('resp'=>false)));
	}	
}

 ?>