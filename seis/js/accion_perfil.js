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
			.done(function(data1) {
				 alertify.success('Se han actualizado los datos con éxito !!');
			})
			.fail(function(data) {
				// console.log(data);
			})	
		}

		
	})




		//Función para actualizar la foto de perfil
		$('#envio').hide();
		$('#imagen').change(function() {
			var tiposIMG =['image/jpeg','image/png'];
			var imagen = $(this)[0].files;
			var result;
			// console.log(tiposIMG.length)
				if (imagen[0].type != tiposIMG[0] && imagen[0].type != tiposIMG[1]){
					result = false;
				}else{
					result = true;
				}
			if (result){
				$('#infoImage').removeClass('text-danger');
				$('#infoImage').addClass('text-primary');
				$('#infoImage').html(imagen[0].name);
				$('#boton').html('<button type="submit" id="envio" style="display: block;width:50%;margin: 5px auto;" class="btn btn-primary">Actualizar</button>');
				$('#envio').show();
				//Enviar datos por ajax
			}else{
				$('#infoImage').removeClass('text-primary');
				$('#infoImage').addClass('text-danger');
				$('#infoImage').html('El archivo no es válido. !');
				$('#boton').html('');	
			}
		});



//////Subir imagen al servidor
		$('#actualizaImg').submit(function(event){
			event.preventDefault();
			var formData = new FormData(document.getElementById("actualizaImg"));
			$.ajax({
				url: 'modulos/perfil/recibe_perfil.php',
				type: 'POST',
				dataType: 'html',
				data: formData,
				cache: false,
		        contentType: false,
		        processData: false
			})
			.done(function(data) {
				data = JSON.parse(data);
				console.log(data)
				if (data.resp){
					alertify.success('Avatar actualizado !!',2,function(){
					 	window.location.href = 'index.php?modulo=perfil&elemento=index.php';
					});
				}else{
					alert("nada")
				}
			})
			.fail(function() {
				console.log("error");
			});
		})
});