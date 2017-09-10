<?php

if (isset($_POST["nombre"])) {
	require_once("../../controladores/conexion/conn.php");
	$db = new conexion();
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$sistema = $_POST['sistema'];
	$cargo = $_POST['cargo'];
	$correo = $_POST["correo"];
	$biografia = $_POST["biografia"];
	$codigo = $_POST["codigo"];
	$data = array(
		"nombre"=> $nombre,
		"apellido" => $apellido,
		"usuario" => $usuario,
		"sistema" => $sistema,
		"cargo" => $cargo,
		"correo" => $correo,
		"biografia" => $biografia,
		"codigo" => $codigo,
		"respuesta" => ""
		);
	$query = "UPDATE `usuarios_funes` SET `nombre` = '$nombre', `apellidos` = '$apellido', `usuario` = '$usuario', `sistema` = '$sistema', `cargo` = '$cargo', `correo` = '$correo', `biografia` = '$biografia', `codigo` = '$codigo' WHERE `usuarios_funes`.`id` = 1";
	if($db->abc($query)){
		$data["respuesta"]=true;
		print(json_encode($data));
		
	}else{
		$data["respuesta"]=false;
		print(json_encode($data));
	}



}else if(isset($_FILES)){
	require_once("../../controladores/conexion/conn.php");
	// print("Tenemos la imagen.");
	$id = 1;//Cambiar estos datos con los que devuelva la base de datos
	$nombreUsuario = "Luis Fernando Raga";//Cambiar estos datos con los que devuelva la base de datos
	$nombreImg = $nombreUsuario."_".$id;

	$dir_subida = '../../img/perfiles/';
	$tipo = $_FILES['imagen']['type']='image/jpeg';
	$nombre = $_FILES['imagen']['name']= $nombreImg.'.jpg';
	$fichero_subido = $dir_subida . $nombre;

	// echo '<pre>';
	$respuesta = [
	    	'resp' => '',
	    	'imagen' => $nombre
	    ];
	if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
	    $db = new conexion();
	    $q = "UPDATE `usuarios_funes` SET `img` = '$nombre' WHERE `usuarios_funes`.`id` = $id";
	    $db->abc($q);
	    $respuesta['resp']=true;
	    echo json_encode($respuesta);

	} else {
		$respuesta['resp']=false;
	    echo json_encode($respuesta);
	    // echo false;
	}

	// echo 'Más información de depuración:';
	// print_r($_FILES);

	// print "</pre>";


}else{
	print('Nada');
}












 ?>