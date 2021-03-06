 <?php 
        if (!isset($_SESSION["usuario"])){
        header("Location:../../index.php");
    }
     require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT productos_funes.id,productos_funes.codigo,productos_funes.precio,productos_funes.descripcion,usuarios_funes.nombre FROM productos_funes
        INNER JOIN usuarios_funes ON usuarios_funes.id = productos_funes.usuario_id";
	$data = $db->leeTabla($q);
 ?>


<div class="panel panel-default animated">
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
                    <th>Nombre creador</th>
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
                    <td><?php print(utf8_encode($data[$i]->nombre)); ?></td>

                    <td class="center">
                        <a style="color: green; text-decoration:none;" href="" data-toggle="modal" data-target="#modalproducto" onclick="llenar_modal('<?php print($data[$i]->id) ?>');">
                            <i style="font-size:20px;display:block;text-align:center;" class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td class="center">
                        <a style="color:red;text-decoration: none;" href="" id="elimi_producto" onclick="eliminar_producto('<?php print($data[$i]->id) ?>');">
                            <i style="font-size:20px;display:block;text-align:center;" class="fa fa-minus-circle"></i>
                        </a>
                    </td>
                </tr>
                 <?php 
                    }
                  ?>
            </tbody>
        </table>
    </div>
</div>
                    <!-- /.panel -->
<!-- Modal -->
 <div class="modal fade" id="modalproducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script src="js/jquery.min.js"></script>
<script src="js/accion_productos.js"></script>
<!-- <script src="js/dropzone.js"></script> -->

