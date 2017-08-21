	

	///dropzone
	Dropzone.options.subida = {
	  maxFilesize: 1, // MB
	  url:"modulos/presupuesto/enviar_correo.php",
	  createImageThumbnails:true, //generar la imagenes en miniatura
	  clickable:true,
	  addRemoveLinks:true,
	  dictDefaultMessage:'Subir archivos',
	  dictRemoveFile:'Eliminar archivo',
	  autoProcessQueue:false,
	  //Enviar datos adicionales
	  params:{nombre:"Luis Fernando"},
	 ////Manejado de eventos http://www.dropzonejs.com/#enqueuing-file-uploads
	  init: function() {
	  	///Se recibe la respuesta del servidor
	    this.on("success", function(file,res){
	     console.log(res); 
		});
	  }
	};

	$('#envia').click(function() {
	    var myDropzone = Dropzone.forElement("#subida");
	    myDropzone.processQueue();
	});




$(document).ready(function() {
});