<!-- 
// if(isset($_POST['bandera']) AND $_POST['bandera']=='Acceder' ){
// 	$usuario = $_POST["usuario"];
// 	$clave = $_POST['clave'];
// 	$resp = [
// 	'resp' =>true,
// 	'respliteral'=>'con acceso'
// 	];
// 	print(json_encode($resp));
// }else{
// 	$resp = [
// 	'resp' =>false,
// 	'respliteral'=>'sin acceso'
// 	];
// 	print(json_encode($resp));
// } -->



 <?php 
 session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:index.php");
}
if (isset($_POST["usuario"])) {
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];
	$q = "SELECT * FROM usuarios_funes WHERE usuario = '$usuario' AND clave = '$clave'";
	$data = $db->leeTabla($q);
	if (count($data)>0) {
		for ($i=0; $i <count($data); $i++) {  
			session_start(); 
			$_SESSION["usuario"]= $data[$i]->id;
		}
		print(1);
		// print($_SESSION["usuario"]);
	 }else{
		print(0);
	}	
}

 ?>