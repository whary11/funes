$('#inicio').submit(function(event){
	event.preventDefault();
	//////Recoger los datos para validar
	var usuario = $('#usuario').val();
	var clave = $('#clave').val();
	var datos ={
		'usuario':usuario,
		'clave':clave,
	}
	if(usuario==""){
		$('#controlusuario').addClass('has-error')
	}else if(clave==""){
		$('#controlusuario').removeClass('has-error')
		$('#controlclave').addClass('has-error');
	}else if(clave.length <= 4){
		$('#controlclave').addClass('has-error');
	}else{
		$('#controlclave').removeClass('has-error');
		$.ajax({
			url: 'modulos/inicio/valida_usuario.php',
			type: 'POST',
			dataType: 'JSON',
			data: datos,
		})
		.done(function(resp) {
			if (resp.resp) {
				swal({
				  icon: "success",
				  text:"Redireccionando",
				  button: false,
				});
			 setInterval(function(){
			 	window.location.replace("index2.php?modulo=perfil&elemento=index.php")
			 },800)
			}else{
				// alert("No puesdes acceder al sistema.")
				swal({
				  icon: "error",
				  text:"No puesdes acceder al sistema, intentalo nuevamente.",
				  button: true,
				});
			}
		})		
	}
});