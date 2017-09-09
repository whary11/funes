<?php

if (!isset($_POST["nombre"])) {
	print('No hay acceso');
}else{
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
		// print(json_encode($data));
		
	}else{
		$data["respuesta"]=false;
		// print(json_encode($data));
	}





}












 ?>