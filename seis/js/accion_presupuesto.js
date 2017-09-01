

Dropzone.options.subida = {
  maxFilesize: 300, // MB
  url:"modulos/presupuesto/enviar_correo.php",
  createImageThumbnails:true, //generar la imagenes en miniatura
  clickable:true,
  addRemoveLinks:true,
  dictDefaultMessage:'Subir archivos',
  dictRemoveFile:'Eliminar archivo',
  autoProcessQueue:false,

};
$('#envia').click(function() {
	var myDropzone = Dropzone.forElement("#subida");
	myDropzone.processQueue();



	myDropzone.on("success", function(file, res) {
	  // Will send the filesize along with the file as POST data.
	  console.log(res);
	});
});








