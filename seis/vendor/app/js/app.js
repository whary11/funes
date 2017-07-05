$(document).ready(function() {


	// Cargar archivos
	////////////////Clientes/////////////
	$('#nuevocliente').click(function() {
		$('#resultado').load("nuevocliente.html", function(){
			//////Validar formulario de nuevo cliente dentro de la función de conlback
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
					/////Implementar AJAX para culminar envío de formulario, lo hace el backend
				}
				
			});
		});
	})
	/////////////Productos////////////
	$('#nuevoproducto').click(function() {
		$('#resultado').load("productos.html", function(){
			$("#formProductos").submit(function(event) {
				//has-error
				event.preventDefault();
				var codigo = $("#codigo").val();
				var precio = $("#precio").val();
				var descripcion = $("#descripcion").val();
				if (codigo==""){
					$(".codigo").addClass('has-error');
				}else if(precio==""){
					$(".precio").addClass('has-error');
					$(".codigo").removeClass('has-error');
				}else if(descripcion==""){
					$(".descripcion").addClass('has-error');
					$(".precio").removeClass('has-error');
				}else{
					$(".descripcion").removeClass('has-error');
					/////Implementar AJAX para culminar envío de formulario, lo hace el backend
				}
			});
		});
	});


	// ///////////Generar presupuestos
	$("#nuevoPresupuesto").click(function() {
		/////Array de productos, que llenaremos con los productos que el usuario quiera anexar al presupuesto
		
		var productos = [];
		$('#resultado').load("nuevoPresupuesto.php", function(){
			// var llamamda = $('.llmadaproductos select option:selected');
			var i = 0;		
			$('.llmadaproductos select').change(function(event){
				var id = $(this).val();
				
				$.post('../controladores/datos/listarproductos.php', {producto: id}, function(data, textStatus, xhr) {
					var data = JSON.parse(data);
					$(this).children('input:first').val(data[0].precio);
					$('.precio').val(data[0].precio);
					$('.id').val(data[0].codigo);
					///////Llnamos el arreglos productos[]
					productos.push(parseInt(data[0].codigo))
				});
				$("#formPresupuesto").submit(function(event){
					event.preventDefault();
					var producto = $("#producto").val();
					if (producto=="Seleccione un Producto"){
						$(".producto").addClass('has-error');
					}else{
						$("#producto option:first").attr({
								selected: '',
						});
						$(".descripcion").removeClass('has-error');

						//////Tomamos acción con nuestro arreglo productos, luego que se pasó la validación de datos
						var cliente = $(".cliente select").val();
						var finpro = {
							cliente:parseInt(cliente),
							id:productos
						}
						$('.precio').val('');
						$('.id').val('');
						
						console.log(finpro);
						////Gernerar el código que permita darle una vista previa al usuario del presupuestos a generar.
					}
			
				});
				
				// console.log(i)
			});
		});
	});

	// Buscador de clientes en tiempo real
	var buscador = $("#buscador");
	buscador.keyup(function(){
		var valorBus = buscador.val();
			if(valorBus==""){
				$(".muestraresult").css({
					"display":"none"
				});
			}else{	
				$.ajax({
						url: '../controladores/buscadores/buscar.php',
						type: 'POST',
						dataType:'html',
						data: {valorBus: valorBus},
						beforeSend:function(){

						}
				})
				.done(function(data) {
				// Mostrar resultados en tiempo real
				// Terminar buscador
					var resultado = $(".muestraresult");
					resultado.css({
						"display":"block"
					});
                    resultado.html(data);	
				})
				.fail(function(data) {
					console.log(data);
				})
			}
		});





////////////Cargar infromación en la sección de ver productos

	$("#verProductos").click(function(){
		$("#resultado").load("../controladores/datos/verProductos.php", function(){
			$('#dataTables-example').DataTable({
            responsive: true
        });
		});
	});

	///////////Cargar infromación en la sección de ver clientes

	$("#verClientes").click(function(){
			$("#resultado").load("../controladores/datos/verClientes.php", function(){
			$('#dataTables-example').DataTable({
	            responsive: true
	        });
		});
	});








	
});
