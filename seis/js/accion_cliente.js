'use strict'
$("#form_nuevocliente").submit(function(event){
	event.preventDefault();
	// has-error
	/*Validación de la entrada de prductos nuevos*/
	var razon = $("#razon").val();
	var cuil = $("#cuil").val();
	var cliente = $("#cliente").val();
	var condicioniva = $("#condicioniva").val();
	var direccion = $("#direccion").val();
	var correo1 = $("#correo1").val();
	var telefono1 = $("#telefono1").val();
	var contacto1 = $("#contacto1").val();
	var whatsapp = $("#whatsapp").val();
	var contacto2 = $("#contacto2").val();
	var correo2 = $("#correo2").val();
	var telefono2 = $("#telefono2").val();
	var contacto3 = $("#contacto3").val();
	var correo3 = $("#correo3").val();
	var telefono3 = $("#telefono3").val();
	if (razon=="") {
		$(".razon").addClass("has-error");
	}else if(cuil==""){
		$(".cuil").addClass("has-error");
		$(".razon").removeClass("has-error");
	}else if(cliente=="Seleccione un tipo de cliente"){
		$(".cliente").addClass("has-error");
		$(".cuil").removeClass("has-error");
	}else if(condicioniva==""){
		$(".condicioniva").addClass("has-error");
		$(".cliente").removeClass("has-error");
	}else if(direccion==""){
		$(".direccion").addClass("has-error");
		$(".condicioniva").removeClass("has-error");
	}else if(correo1==""){
		$(".correo1").addClass("has-error");
		$(".direccion").removeClass("has-error");
	}else if(telefono1==""){
		$(".telefono1").addClass("has-error");
		$(".correo1").removeClass("has-error");
	}else if(contacto1==""){
		$(".contacto1").addClass("has-error");
		$(".telefono1").removeClass("has-error");
	}else if(whatsapp==""){
		$(".whatsapp").addClass("has-error");
		$(".contacto1").removeClass("has-error");
	}else if(contacto2==""){
		$(".contacto2").addClass("has-error");
		$(".whatsapp").removeClass("has-error");
	}else if(correo2==""){
		$(".correo2").addClass("has-error");
		$(".contacto2").removeClass("has-error");
	}else if(telefono2==""){
		$(".telefono2").addClass("has-error");
		$(".correo2").removeClass("has-error");
	}else if(contacto3==""){
		$(".contacto3").addClass("has-error");
		$(".telefono2").removeClass("has-error");
	}else if(correo3==""){
		$(".correo3").addClass("has-error");
		$(".contacto3").removeClass("has-error");
	}else if(telefono3==""){
		$(".telefono3").addClass("has-error");
		$(".correo3").removeClass("has-error");
	}else{
		$(".telefono3").removeClass("has-error");

		$.ajax({
			url: 'modulos/cliente/insertar.php',
			type: 'POST',
			dataType: 'json',
			data:$('#form_nuevocliente').serialize(),
		})
		.done(function(data) {
			// console.log(data)
			if (data.resp) {
				// alert('Datos insertados correctamente');
				swal({
				  icon: "success",
				  text:"Datos insertados correctamente",
				  button: true,
				});
				$(".limpiar").val("");
			}

		})
	}
	
});

function eliminar_cliente(id){
		// $('#elimi_cliente').click(function(event) {
		// event.preventDefault();
		$.ajax({
		url: 'modulos/cliente/eliminar.php',
		type: 'POST',
		data:{id_cliente:id},
		})
		.done(function(respuesta){
			// console.log(respuesta)
			 // setTimeout("document.location=document.location");
		})
	// });	
	}
	function llenar_modal_cliente(id){
		$.ajax({
		url: 'modulos/cliente/llenar_modal.php',
		type: 'POST',
		data:{id_cliente:id},
		})
		.done(function(respuesta){
		 $('#body_cliente').html(respuesta);
	})	
	}

	function editar_cliente(){
	$("#editar_cliente").submit(function(event) {
		event.preventDefault();
	
	$.ajax({
		url: 'modulos/cliente/editar.php',
		type: 'POST',
		data: $('#editar_cliente').serialize(),
		})
		.done(function(respuesta){
			swal({
			  icon: "success",
			  text:"Datos actualizados correctamente",
			  button: true,
			});
			setTimeout("document.location=document.location",800);
	
		})
	});
}