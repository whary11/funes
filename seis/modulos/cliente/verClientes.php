<?php 
	require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM clientes_funes";
	$data = $db->leeTabla($q);
	// print("Conexión funcionado, tenemos <b>".count($data). "</b> clientes registrados");
 ?>

<div class="panel panel-default animated slideInUp">
    <div class="panel-heading">
        Tabla de Clientes registrados
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table class="table table-striped table-bordered table-hover table-responsive" id="cliente-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Razon social</th>
                    <th>CUIT/CUIL</th>
                    <th>Tipo</th>
                    <th>Condicion Iva</th>
                    <th>Domicilio comercial</th>
	                <th>Correo1</th>
	                <th>Telefono1</th>
	                <th>Contacto1</th>
                    <th>Whasapt</th>
                 	<th>Contacto2</th>
                  	<th>Correo2</th>
                   	<th>Telefono2</th>
                   	<th>Contacto3</th>
                  	<th>Correo3</th>
                   	<th>Telefono3</th>
                   	<th>Cargado por</th>
                  	<th>Comentarios</th>
                   	<th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i=0; $i <count($data); $i++) {                            
                 ?>
                <tr class="gradeU">
                    <td><?php print($data[$i]->id); ?></td>
                    <td><?php print($data[$i]->razon_social); ?></td>
                    <td><?php print($data[$i]->cuit); ?></td>
                    <td><?php print($data[$i]->tipo); ?></td>
                    <td><?php print($data[$i]->condicion_iva); ?></td>
                    <td><?php print($data[$i]->domicilio_comercial); ?></td>
                    <td><?php print($data[$i]->correo1); ?></td>
                    <td><?php print($data[$i]->telefono1); ?></td>
                    <td><?php print($data[$i]->contacto1); ?></td>
                    <td><?php print($data[$i]->whatsapp); ?></td>
                    <td><?php print($data[$i]->contacto2); ?></td>
                    <td><?php print($data[$i]->correo2); ?></td>
                    <td><?php print($data[$i]->telefono2); ?></td>
                    <td><?php print($data[$i]->contacto3); ?></td>
                    <td><?php print($data[$i]->correo3); ?></td>
                    <td><?php print($data[$i]->telefono3); ?></td>
                    <td><?php print($data[$i]->cargado_por); ?></td>
                    <td><?php print($data[$i]->comentarios); ?></td>
                    <td><?php print($data[$i]->fecha_cargue); ?></td>

                    <td class="center">
                        <a  style="color: green; text-decoration:none;" href="" data-toggle="modal" data-target="#modalcliente" onclick="llenar_modal_cliente('<?php print($data[$i]->id) ?>');">
                            <i style="font-size:20px;display:block;text-align:center;" class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td class="center">
                        <a style="color:red;text-decoration: none;" href="" id="elimi_cliente" onclick="eliminar_cliente('<?php print($data[$i]->id) ?>');">
                            <i style="font-size:20px;display:block;text-align:center;" class="fa fa-minus-circle"></i>
                        </a>
                    </td>
                </tr>
                 <?php 
                    }
                  ?>
            </tbody>
        </table>
        <input type="hidden" name="">
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
                    <!-- /.panel -->
<!-- Modal -->
 <div class="modal fade" id="modalcliente" tabindex="-1" role="dialog" aria-labelledby="         exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h2 class="modal-title text-center text-primary" id="exampleModalLabel">Editar Cliente</h2>
           <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button> -->
         
          <div class="modal-body" id="body_cliente">
            

          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> -->
            <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button> -->
          </div>
        </div>
      </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/app.js"></script>
<script src="js/dropzone.js"></script>


 