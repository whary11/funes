<?php 
        if (!isset($_SESSION["usuario"])){
        header("Location:../../index.php");
    }
	require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM clientes_funes";
	$data = $db->leeTabla($q);
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
                  <th>Razon social</th>
                  <th>CUIT/CUIL</th>
                  <th>Correo1</th>
                  <th>Telefono1</th>
                  <th>Contacto1</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i=0; $i <count($data); $i++) {                            
                 ?>
                <tr class="gradeU">
                    <td><?php print($data[$i]->razon_social);?></td>
                    <td><?php print($data[$i]->cuit); ?></td>
                    <td><?php print(utf8_encode($data[$i]->correo1));?></td>
                    <td><?php print($data[$i]->telefono1);?></td>
                    <td><?php print($data[$i]->contacto1);?></td>
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
    </div>
</div>
<style type="text/css">
</style>
<!-- Modal -->
<div class="modal fade" id="modalcliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <h2 class="modal-title text-center text-primary" id="exampleModalLabel">Editar Cliente</h2>        
      <div class="modal-body" id="body_cliente">


      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/accion_cliente.js"></script>
<script src="js/app.js"></script>