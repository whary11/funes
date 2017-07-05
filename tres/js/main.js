$(document).ready(function() {
	$('#nuevocliente').click(function(){
		$('#contenido').load('vistas/nuevocliente.html');
		$('#nuevocliente').addClass("active")
	})
});