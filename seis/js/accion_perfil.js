$(document).ready(function() {
	var formulario = $('#perfil-user');
	var nombre = $("#nombre");
	var apellido = $("#apellidos");
	var usuario = $("#usuario");
	var sistema = $('#sistema');
	var cargo = $('#cargo');
	var correo = $('#correo');
	var biografia = $('#biografia');
	var codigo = $('#codigo');

	formulario.submit(function(event){
		event.preventDefault();
		var datos = {
			nombre: nombre.val(),
			apellido: apellido.val(),
			usuario: usuario.val(),
			sistema: sistema.val(),
			cargo:cargo.val(),
			correo: correo.val(),
			biografia: biografia.val(),
			codigo:codigo.val()
		}

		if(datos.nombre == ""){
			$('.nombre').addClass('has-error');
		}else if(datos.apellido ==""){
			$('.nombre').removeClass('has-error');
			$('.apellidos').addClass('has-error');
		}else if(datos.usuario==""){
			$('.nombre').removeClass('has-error');
			$('.apellidos').removeClass('has-error');
			$('.usuario').addClass('has-error');
		}else if(datos.sistema==""){
			$('.nombre').removeClass('has-error');
			$('.apellidos').removeClass('has-error');
			$('.usuario').removeClass('has-error');
			$('.sistema').addClass('has-error');
		}else if(datos.cargo==""){
			$('.nombre').removeClass('has-error');
			$('.apellidos').removeClass('has-error');
			$('.usuario').removeClass('has-error');
			$('.sistema').removeClass('has-error');
			$('.cargo').addClass('has-error');
		}else if(datos.correo==""){
			$('.nombre').removeClass('has-error');
			$('.apellidos').removeClass('has-error');
			$('.usuario').removeClass('has-error');
			$('.sistema').removeClass('has-error');
			$('.cargo').removeClass('has-error');
			$('.correo').addClass('has-error');
		}else if(datos.biografia==""){
			$('.nombre').removeClass('has-error');
			$('.apellidos').removeClass('has-error');
			$('.usuario').removeClass('has-error');
			$('.sistema').removeClass('has-error');
			$('.cargo').removeClass('has-error');
			$('.correo').removeClass('has-error');
			$('.biografia').addClass('has-error');
		}else if(datos.codigo==""){
			$('.nombre').removeClass('has-error');
			$('.apellidos').removeClass('has-error');
			$('.usuario').removeClass('has-error');
			$('.sistema').removeClass('has-error');
			$('.cargo').removeClass('has-error');
			$('.correo').removeClass('has-error');
			$('.biografia').removeClass('has-error');
			$('.codigo').addClass('has-error');
		}else{
			$('.nombre').removeClass('has-error');
			$('.apellidos').removeClass('has-error');
			$('.usuario').removeClass('has-error');
			$('.sistema').removeClass('has-error');
			$('.cargo').removeClass('has-error');
			$('.correo').removeClass('has-error');
			$('.biografia').removeClass('has-error');
			$('.codigo').removeClass('has-error');

			$.ajax({
				url: 'modulos/perfil/recibe_perfil.php',
				type: 'POST',
				dataType: 'JSON',
				data: datos,
			})
			.done(function(data) {
				console.log(data);
				$('#resp').addClass("alert-info");
				$('#resp').text('Se han actualizado los datos con éxito !!');
			})
			.fail(function(data) {
				console.log(data);
			})	
		}
		
	})









});