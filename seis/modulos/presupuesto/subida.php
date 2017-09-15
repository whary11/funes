<?php

if (isset($_FILES)) {
	require_once '../../controladores/PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;


	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$dir_subida = 'carga/';
	$archivos = $_FILES;
	$adjuntos= [];
	foreach ($archivos as $archivo){
		for($i=0;$i<count($archivo['name']);$i++){
			$nombre = $archivo['name'][$i];
			$tmp_name = $archivo['tmp_name'][$i];
			$adjunto = [$nombre,$tmp_name];
			array_push($adjuntos, $adjunto);
		}
	}
		for ($i=0; $i < count($adjuntos); $i++) { 
				$mail->addAttachment($adjuntos[$i][1], $adjuntos[$i][0]);
			}	
		$mensaje = $_POST["mensaje"];
		
		$html = '<p>'.$mensaje.'</p>';
		// $mail->isSMTP();
		$mail->Host = 'mail.nutriendofs.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'lraga@nutriendofs.com';
		$mail->Password = '1077444356';  //Contraseña del correo alectrónico
		$mail->SMTPSecure = 'ssl';     
		$mail->Port = 465;
		/////////////Remitente/////////////////////////
		$mail->setFrom('lraga@nutriendofs.com', utf8_decode('Luis Fernando Raga')); ///Remitente
		////////////////Destinatarios ///////////////
		// $mail->addAddress('whary11@gmail.com', 'Raga-Desarrollador Web');     // El nombre es opcional
		$mail->addAddress('whary11@gmail.com', 'EQ');     // El nombre es opcional
		$mail->addReplyTo('lraga@nutriendofs.com', 'Respuestas Luis - Pruebas Sistema Funes');   ////Dirección de respuesta es opcional
		/////copias de correo electrónico/////
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('ejemplo@gmail.com', 'Raga-Desarrollador Web');	 ///Copia oculta
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Agregar archivos adjuntos
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // El nombre es opcional 
		$mail->isHTML(true);                                  // Establecer el formato de correo electrónico en HTML

		/////Últimas configuraciones 
		$mail->Subject = 'Se ha generado un nuevo presupuesto';   ////Establecer un asusnto
		$mail->Body    = $html;  ////Correo en formato HTML
		$mail->AltBody = 'Nada de HTMl'; //Texto plano para los servicios de correo que no admiten HTML
		$envio = $mail->send();   ///Se envia el correo electrónico

		///Validar envío de correo electrónico
		if(!$envio) {
		    echo 'Error: ' . $mail->ErrorInfo;
		    return 0;
		} else {
		    print(1);
		    return 1;
		}
// instruciones para elenvío del correo electrónico
// var_dump($adjuntos);
}else{
	print('No funciona');
}

 ?>