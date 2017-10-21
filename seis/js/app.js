var presupuesto = [];
var id_produ = [];
var pre = [];
var total =0;
var clientefin = 0;
$(document).ready(function(){ });
	
	// Buscador de clientes existentes en tiempo real
	var buscador = $("#buscador");
	var resultado = $(".muestraresult");
	buscador.keyup(function(key){
		var valorBus = buscador.val();
			if (key.keyCode===27){
				resultado.css({
					"display":"none"
				});
			}else if(valorBus==""){
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
	buscador.blur(function(event) {
		resultado.css({
			"display":"none"
		});
	});



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

    function soloNumeros(e){
		var key = window.Event ? e.which: e.keyCode
		return (key >= 48 && key <= 57)
	}


