	// console.log(Dropzone.options.subida);
	// Dropzone.autoDiscover = false;
	var confir = {
		bandera:false
	}

		Dropzone.options.subida = {
		  maxFilesize: 100, // MB
		  // url:"modulos/presupuesto/enviar_correo.php",
		  createImageThumbnails:true, //generar la imagenes en miniatura
		  clickable:true,
		  addRemoveLinks:true,
		  dictDefaultMessage:'Subir archivos',
		  dictRemoveFile:'Eliminar archivo',
		  // autoProcessQueue:true,
		};
	$('#envia').click(function() {
	 
	

	    	// enviar correo cuando no se adjunte archivos
	    	$.ajax({
	  			url: 'modulos/presupuesto/enviar_correo.php',
	  			type: 'POST',
	  			dataType: 'html',
	  			data: {nombre:'sin adjuntos'},
	  		})
	  		.done(function(data) {
	  			console.log(data);
	  		})
	  		.fail(function() {
	  			console.log("error");
	  		})

	    
	});



