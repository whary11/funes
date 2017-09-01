var presupuesto = [];
var id_produ = [];
// var desc = [];
var pre = [];
var total =0;
var clientefin = 0;
alert("Hola Mundo")

$(document).ready(function(){ });
	// Cargar archivos
	////////////////Clientes/////////////
	// $('#nuevocliente').click(function() {
		// $('#resultado').load("nuevocliente.html", function(){
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
		// });
	// })
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
						alert('Datos insertados correctamente');
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
	$('#elimi_producto').click(function(event) {
		event.preventDefault();
		$.ajax({
		url: 'modulos/producto/eliminar.php',
		type: 'POST',
		data:{id_producto:id},
		})
		.done(function(respuesta){
			 setTimeout("document.location=document.location");
		})
	});	
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
			alert('Datos actualizados correctamente');
			setTimeout("document.location=document.location");
	
		})
	});
}
	
		
	// ///////////Generar presupuestos

////Cargar lo productos desde la base de datos.
		
		var precio="";
		var codigo = "";
		// $('#resultado').load("nuevoPresupuesto.php", function(){
			$("#productos").change(function(event) {
				var id = $(this).val();
				$.ajax({
					url: 'modulos/presupuesto/listarproductos.php',
					type: 'POST',
					dataType: 'json',
					data: {id:id},
				})
				.done(function(data){
					console.log('data');
					if (id=='Seleccione un Producto') {
						$('.precio').val('');
						$('.id').val('');
						
					}else{
						$('.precio').val(data);
						$('.id').val(id);						
					}
					precio = data;
				})

			});
			var contador=0;
			$('#formPresupuesto').submit(function(event) {
				event.preventDefault();
				var descripcion = document.getElementById('productos').options[document.getElementById('productos').selectedIndex].text;
				var cliente = $('#clientes').val();
				var producto = $('#productos').val();
				if(cliente=="Seleccione un cliente"){
					$(".clientes").addClass('has-error');

				}else if(producto=='Seleccione un producto'){
					$(".clientes").removeClass('has-error');
					$(".productos").addClass('has-error');
				}else if($('.precio').val()=="" || $('.id').val()==""){

				}else{
					$(".clientes").removeClass('has-error');
					$(".productos").removeClass('has-error');
					contador++;
					id_produ.push(parseInt(producto));
					// desc.push(descripcion);
					pre.push(parseInt(precio));
					var td = '<tr idmayor='+contador+'><td>'+producto+'</td>'
						td+= '<td>'+descripcion+'</td>'
						td+= '<td>$ '+precio+'</td>'
						td+='<td><button id="'+contador+'" type="button"'
						td+= ' onclick="borrar(this.id)" class="btn btn-danger btn-circle"'
						td+= ' ><i class="fa fa-times"></i></button></td>'
					$('#tbody').append(td);
					reordenar();
					$('.limpiar').val('');
					$('#paragenerar').html('<div id="r"><button onclick="generar_presupuesto();" id="generar" data-toggle="modal" data-target="#exampleModal" class="btn btn-suscces"><span class="glyphicon glyphicon-plus"></span>Generar</button></div>');
					//Notificación
					alertify.success('Producto agregado');
					for(var i =0;i<pre.length;i++){
						total += parseInt(pre[i]);
					}
				}
			});
///LLenamos el arreglo a enviar a la base de datos
			presupuesto.push(id_produ);
			// presupuesto.push(desc);
			presupuesto.push(pre);

//////función donde se genera el presupuesto
function generar_presupuesto(){
	// $('#generar').click(function(){
		clientefin = parseInt($('#clientes').val());
		var dataInfo = {
			cliente:clientefin,
			presupuesto:presupuesto,
			total:total
		}
		$.ajax({
			url: 'modulos/presupuesto/inserta_presupuesto.php',
			type: 'POST',
			dataType: 'html',
			data: dataInfo,
		})
		.done(function(data) {
			console.log(data);
		})

	// })

}
					
		// });

	// });
	
	// Buscador de clientes existentes en tiempo real
	var buscador = $("#buscador");
	buscador.keyup(function(){
		var valorBus = buscador.val();
			if(valorBus==""){
				$(".muestraresult").css({
					"display":"none"
				});
			}else{	
				$.ajax({
						url: 'controladores/buscadores/buscar.php',
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
					// console.log(data);
				})
			}
		});

////////////Cargar infromación en la sección de ver productos

	// $("#verProductos").click(function(){
	// 	// $("#resultado").load("../controladores/datos/verProductos.php", function(){
	// 		$('#dataTables-example').DataTable({
 //            responsive: true
 //        });
	// 	// });
	// });

	///////////Cargar infromación en la sección de ver clientes

	$("#verClientes").click(function(){
			// $("#resultado").load("../controladores/datos/verClientes.php", function(){
			$('#dataTables-example').DataTable({
	            responsive: true
	        });
		});
	
	
// });








///Función para formatear números 
    function numberFormat(numero){
        // Variable que contendra el resultado final
        var resultado = "";
 
        // Si el numero empieza por el valor "-" (numero negativo)
        if(numero[0]=="-")
        {
            // Cogemos el numero eliminando los posibles puntos que tenga, y sin
            // el signo negativo
            nuevoNumero=numero.replace(/\./g,'').substring(1);
        }else{
            // Cogemos el numero eliminando los posibles puntos que tenga
            nuevoNumero=numero.replace(/\./g,'');
        }
 
        // Si tiene decimales, se los quitamos al numero
        if(numero.indexOf(",")>=0)
            nuevoNumero=nuevoNumero.substring(0,nuevoNumero.indexOf(","));
 
        // Ponemos un punto cada 3 caracteres
        for (var j, i = nuevoNumero.length - 1, j = 0; i >= 0; i--, j++)
            resultado = nuevoNumero.charAt(i) + ((j > 0) && (j % 3 == 0)? ".": "") + resultado;
 
        // Si tiene decimales, se lo añadimos al numero una vez forateado con 
        // los separadores de miles
        if(numero.indexOf(",")>=0)
            resultado+=numero.substring(numero.indexOf(","));
 
        if(numero[0]=="-")
        {
            // Devolvemos el valor añadiendo al inicio el signo negativo
            return "-"+resultado;
        }else{
            return resultado;
        }
    }


function borrar(id){
	$('tr[idmayor='+id+']').remove();
	reordenar();
	if(presupuesto.length<1){
		presupuesto.length = 0;
	}else{
		presupuesto[0].splice(id-1,1);
		presupuesto[1].splice(id-1,1);
		// presupuesto[2].splice(id-1,1);

		if(presupuesto[0].length==0){
            $("#r").hide();
           }
	}
	// console.log(presupuesto)
	alertify.error('Se ha quitado el producto.');
}







function reordenar(){
	var cuenta = 1;
	$('#tbody tr').map(function(){
		$(this).attr('idmayor', cuenta);

		$(this).find("td button").eq(0).attr('id', cuenta);

		cuenta++;
	})

}


