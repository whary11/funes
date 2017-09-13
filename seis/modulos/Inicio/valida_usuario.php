<?php

if(isset($_POST['bandera']) AND $_POST['bandera']=='Acceder' ){
	$usuario = $_POST["usuario"];
	$clave = $_POST['clave'];
	$resp = [
	'resp' =>true,
	'respliteral'=>'con acceso'
	];
	print(json_encode($resp));
}else{
	$resp = [
	'resp' =>false,
	'respliteral'=>'sin acceso'
	];
	print(json_encode($resp));
}




 ?>