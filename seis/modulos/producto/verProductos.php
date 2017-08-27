 <?php 
    require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM productos_funes";
	$data = $db->leeTabla($q);
 ?>


<div class="panel panel-default animated slideInUp">
    <div class="panel-heading">
        Tabla de Productos registrados
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="productos-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Código</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i=0; $i <count($data); $i++) {                            
                 ?>
                <tr class="gradeU">
                    <td><?php print($data[$i]->id); ?></td>
                    <td><?php print($data[$i]->codigo); ?></td>
                    <td><?php print($data[$i]->precio); ?></td>
                    <td><?php print(utf8_encode($data[$i]->descripcion)); ?></td>
                    <td class="center">
                        <a style="color: green; text-decoration:none;" href="" data-toggle="modal" data-target="#modalproducto" onclick="llenar_modal('<?php print($data[$i]->id) ?>');">
                            <i style="font-size:20px;display:block;text-align:center;" class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td class="center">
                        <a style="color:red;text-decoration: none;" href=""  onclick="eliminar_producto('<?php print($data[$i]->id) ?>');">
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
 <div class="modal fade" id="modalproducto" tabindex="-1" role="dialog" aria-labelledby="         exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h2 class="modal-title text-center text-primary" id="exampleModalLabel">Editar producto</h2>
           <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button> -->
         
          <div class="modal-body" id="body_producto">
            

          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> -->
            <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button> -->
          </div>
        </div>
      </div>
    </div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/app/js/app.js"></script>
<script src="js/dropzone.js"></script>
