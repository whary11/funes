/*Recoger información del presupuesto a generar*/
var presupuesto = [];
var id_produ = [];
var cant = [];
var pre = [];
var sub = [];
var total =0;
var clientefin = 0;

var precio="";
// $(document).ready(function() {
    // $('#resultado').load("nuevoPresupuesto.php", function(){
  $("#productos").change(function(event) {
    var id = $(this).val();
    // var ids = $(this).attr('id');
    $.ajax({
      url: 'modulos/presupuesto/listarproductos.php',
      type: 'POST',
      dataType: 'html',
      data: {id:id},
    })
    .done(function(data){
      if (id=='Seleccione un producto') {
        $('.precio').val('');
        // $('.id').val('');
      }else if(data==1){
        $('.precio').val('');
        // $('.id').val('');
      }else{
        $('.precio').val(data);
        // $('.id').val(id);           
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
    var cantidad = $('#cantidad').val();

    // alert(cantidad)
    if(cliente=="Seleccione un cliente"){
      $(".clientes").addClass('has-error');
    }else if(producto=='Seleccione un producto'){
      $(".clientes").removeClass('has-error');
      $(".productos").addClass('has-error');
    }else if ($(".precio").val()=="") {
      // $(".producto").val("Seleccione un producto");
    }
    else if($('.cantidad').val()==""){
       $(".cantidad").attr('style', 'border: 1px solid red');
    }else{
      $(".cantidad").attr('style', 'border: 1px solid gray');
      $(".clientes").removeClass('has-error');
      $(".productos").removeClass('has-error');
      // $(".limpiar").val("")
      var subtotal = parseInt(cantidad) * parseInt($(".precio").val()) 
      contador++;
      id_produ.push(parseInt(producto));
      cant.push(cantidad);
      sub.push(parseInt(subtotal));
      pre.push(parseInt(precio));
      var td = '<tr idmayor='+contador+' class="odd gradeX"><td>'+producto+'</td>'
        td+= '<td>'+descripcion+'</td>'
        td+= '<td>$ '+precio+'</td>'
        td+= '<td>'+cantidad+'</td>'
        td+= '<td>$ '+subtotal+'</td>'
        td+='<td><button id="'+contador+'" type="button"'
        td+= ' onclick="borrar(this.id)" class="btn btn-danger btn-circle"'
        td+= ' ><i class="fa fa-times"></i></button></td>'
      $('#tbody').append(td);
      reordenar();
      $('.limpiar').val('');
      $('#paragenerar').html('<div id="r"><button onclick="generar_presupuesto();" id="generar" data-toggle="modal" data-target="#exampleModal" class="btn btn-suscces"><span class="glyphicon glyphicon-plus"></span>Generar</button></div>');
      //Notificación
      alertify.success('Producto agregado');
      for(var i =0;i<sub.length;i++){
        total += parseInt(sub[i]);
      }
    }
  });
///LLenamos el arreglo a enviar a la base de datos
  presupuesto.push(id_produ);
  presupuesto.push(cant);
  presupuesto.push(pre);

//////función donde se genera el presupuesto
  function generar_presupuesto(){
    // $('#generar').click(function(){
    clientefin = parseInt($('#clientes').val());
    // console.log(presupuesto)
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
    // console.log(id_produ)
    console.log(data);
    if(parseInt(data)==1){
      // Se notifica al usuario que el presupuesto está listo para ser enviado
      alertify.notify('Se ha generado el presupuesto correctamente !!', 'success', 5, function(){
      alertify.success('Ahora sólo adjunta tus archivos y envía el presupuesto'); 
    });
    }else{
      // Se notifica al usuario en caso de que se presente un problema en la ejecución
      // alertify.notify('Estamos presentando dificultades, no pudimos generar el presupuesto!!');
      alertify.notify('Estamos presentando dificultades, no pudimos generar el presupuesto!!',
      'custom', 5, function(){
      // console.log('dismissed');
    });
    }
    })
  }
/*Enviar correo electrónico*/
  $('#correo').submit(function(event){
    alert("Hola mundo.")
    event.preventDefault();
    var mensaje = $("#mensaje");
    if (mensaje.val()==""){
      $("#mensaje").css({border:"1px solid #a94442"});
    }else{
      $("#mensaje").css({border:"1px solid #ccc"});
      var formData = new FormData(document.getElementById("correo"));
        formData.append("mensaje", mensaje.val());
        $.ajax({
          url: 'modulos/presupuesto/subida.php',
          type: 'POST',
          dataType: 'html',
          data: formData,
          cache: false,
          contentType: false,
          processData: false
        })
        .done(function(resp){
          if (resp==1){
            alertify.notify('Se ha enviado tu correo correctamente !!', 'success', 5, function(){
              setTimeout("document.location=document.location");
            });
          }else{
            alertify.notify('No se ha enviado tu correo correctamente !!', 'error', 5, function(){
              console.log(resp);
            });
          }
        })
        .fail(function(error) {
          console.log(error);
        })  
    }


  })
// });
/*Funciones*/
function borrar(id){
  $('tr[idmayor='+id+']').remove();
  reordenar();
  if(presupuesto.length<1){
    presupuesto.length = 0;
  }else{
    presupuesto[0].splice(id-1,1);
    presupuesto[1].splice(id-1,1);
    presupuesto[2].splice(id-1,1);

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

function pdf(id){
  window.open("modulos/presupuesto/verPDF.php?presupuesto_id="+id);
}


