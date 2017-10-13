///PRoductos

/////////////Productos////////////
	
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
					$.ajax({
						url: 'modulos/producto/insertar.php',
						type: 'POST',
						data: $('#formProductos').serialize(),
					})
					.done(function(data) {
						// alert('Datos insertados correctamente');
						swal({
						  icon: "success",
						  text:"Datos insertados correctamente",
						  button: true,
						});
						$(".limpiar").val("");
					})
					.fail(function() {
						console.log("error");
					})
				}
			});
			function llenar_modal(id){
					$.ajax({
					url: 'modulos/producto/llenar_modal.php',
					type: 'POST',
					data:{id_producto:id},
					})
					.done(function(respuesta){
					 $('#body_producto').html(respuesta);
				})	
			}

			function eliminar_producto(id){
				// alert(id)
				// $('#elimi_producto').click(function(event) {
					event.preventDefault();
					$.ajax({
					url: 'modulos/producto/eliminar.php',
					type: 'POST',
					data:{id_producto:id},
					})
					.done(function(respuesta){
						if (respuesta == true) {
							alertify.notify('Producto aleminado con exito !',
						      'custom', 3, function(){
						      	setTimeout("document.location=document.location");
						    });
						}
						
					})
				// });	
			}
			function editar_producto(){
				$("#formeditar").submit(function(event) {
					event.preventDefault();
				
				$.ajax({
					url: 'modulos/producto/editar.php',
					type: 'POST',
					data: $('#formeditar').serialize(),
					})
					.done(function(respuesta){
						alertify.notify('Producto actualizado con exito !',
					      'custom', 3, function(){
					      	setTimeout("document.location=document.location");
					    });
				
					})
				});
			}
