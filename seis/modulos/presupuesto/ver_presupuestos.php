 
<?php 
    require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT presupuestos_funes.id, clientes_funes.razon_social,presupuestos_funes.total,presupuestos_funes.nombre_creador,presupuestos_funes.fecha_creado FROM presupuestos_funes
        INNER JOIN clientes_funes ON clientes_funes.id = presupuestos_funes.cliente_id";
	$data = $db->leeTabla($q);
 ?>


<div class="panel panel-default animated slideInUp">
    <div class="panel-heading">
        Tabla de Presupuestos registrados
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="presupuestos-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Nombre de creador</th>
                    <th>Fecha</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i=0; $i <count($data); $i++) {                            
                 ?>
                <tr class="gradeU">
                    <td><?php print($data[$i]->id); ?></td>
                    <td><?php print($data[$i]->razon_social); ?></td>
                    <td><?php print($data[$i]->total); ?></td>
                    <td><?php print($data[$i]->nombre_creador); ?></td>
                    <td><?php print($data[$i]->fecha_creado); ?></td>
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
          </div>
        </div>
      </div>
    </div>
