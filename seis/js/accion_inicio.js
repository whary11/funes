$(document).ready(arranque);
function arranque(){
	var form = $('#inicio');
	form.submit(enviodatos);
}

function enviodatos(event){
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
			// dataType: 'JSON',
			data: datos,
		})
		.done(function(resp) {
			console.log(resp);
			if (resp == true) {
				alertify.notify('Te estamos redireccionando',
			      'custom', 3, function(){
			      // console.log('dismissed');
					window.location.replace("index2.php?modulo=perfil&elemento=index.php");
			    });


				
				// alert("Ya puesdes acceder al sistema Funes.")
			}else if (resp == false){
				alert("No puesdes acceder al sistema.")
			}
		})
		.fail(function(error) {
			console.log(error);
		})
		.always(function() {
			// console.log("complete");
		});
		
	}





};