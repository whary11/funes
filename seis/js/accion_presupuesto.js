$(document).ready(function() {
  $('#correo').submit(function(event){
    event.preventDefault();

    var mensaje = $("#mensaje");

    if (mensaje.val()==""){
      $("#mensaje").css({border:"1px solid #a94442"});
    }else{
      $("#mensaje").css({border:"1px solid #ccc"});
      var formData = new FormData(document.getElementById("correo"));
        formData.append("mensaje", mensaje.val());

        // alert("Aquí");


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
          }
        })
        .fail(function(error) {
          console.log(error);

        })

      

      
    }












  })
});





