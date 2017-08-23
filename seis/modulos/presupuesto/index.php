<link rel="stylesheet" type="text/css" href="css/dropzone.css">
<h4 class="success">Nuevo Presupuesto</h4>
<div  id="alertas">
    <!-- Producto Agregado con éxito -->
</div>
<?php 
    require_once("controladores/conexion/conn.php");
    $db = new conexion();
    $q = "SELECT id,razon_social FROM clientes_funes";
    $data = $db->leeTabla($q);

 ?>
<form role="form" class="row animated slideInUp" id="formPresupuesto" method="POST" enctype="multipart/form-data">
    <div class="form-group col-md-12 clientes">
        <label for="cliente">Cliente</label>
        <select class="form-control" name="clientes" id="clientes">
        	<option>Seleccione un cliente</option>
        	<?php 
                for($i=0;$i<count($data);$i++){ 
                    print('<option value="'.$data[$i]->id.'">'.utf8_encode($data[$i]->razon_social).'</option>');
                }
             ?>
        </select>
    </div>

    <!-- <div class="llmadaproductos"> -->
        <div class="form-group col-md-6 productos">
            <label for="producto">Producto</label>
            <select class="form-control productos llmadaproductos" id="productos">
                <option id="primero">Seleccione un producto</option>
                <?php 
                    $q = "SELECT * FROM productos_funes";
                    $data = $db->leeTabla($q);
                    for($i=0;$i<count($data);$i++){ 
                        print('<option id="'.utf8_encode($data[$i]->descripcion).'" value="'.$data[$i]->codigo.'">'.utf8_encode($data[$i]->descripcion).'</option>');
                    }
                 ?>
            </select>
        </div>
        <div class="form-group col-md-3" id="precio">
            <label for="condicioniva">Precio</label>
            <input type="text" class="form-control precio limpiar" disabled name="precio">
        </div>
        <div class="form-group col-md-3">
            <label for="condicioniva">Código</label>
            <input type="text" class="form-control id limpiar" disabled name="id">
        </div>
        <div class="form-group col-md-3" id="agregar"> 
            <button id="nuevo" class="btn btn-primary" >
                <span class="glyphicon glyphicon-plus"></span>
                Agregar
            </button>
        </div>
        <div class="form-group col-md-3 desaparecer" id="paragenerar"> 
            
        </div>     
</form>
<div class="panel panel-default">
    <div class="panel-heading">
        Tabla de Productos registrados
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
        <!-- /.table-responsive -->
    </div>
</div>

<!-- Creo el modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="         exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title text-center text-primary" id="exampleModalLabel">Enviar correo</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


          <!-- Enviar correo en modal -->
            <form id="subida" enctype="multipart/form-data" class="dropzone" >
                <div class="fallback">
                    <input name="file" type="file" multiple id="input" />
                </div>
            </form>


            <div class="form-group">
                <label for="nota">Nota</label>
                <textarea class="form-control" id="nota" rows="3" name="nota"></textarea>
            </div>

            <button id="envia" class="btn btn-primary">Enviar correo</button>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button> -->
          </div>
        </div>
      </div>
    </div>
<body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/app/js/app.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/accion_presupuesto.js"></script>


</body>

