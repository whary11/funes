 
<?php 
        if (!isset($_SESSION["usuario"])){
        header("Location:../../index.php");
    }

    require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT presupuestos_funes.id, clientes_funes.razon_social,presupuestos_funes.total,usuarios_funes.nombre,presupuestos_funes.fecha_creado FROM presupuestos_funes
        INNER JOIN usuarios_funes ON usuarios_funes.id = presupuestos_funes.usuario_id
        INNER JOIN clientes_funes ON clientes_funes.id = presupuestos_funes.cliente_id";
	$data = $db->leeTabla($q);
 ?>
<style type="text/css">
    .centered{
        text-align: center;
    }
</style>

<div class="panel panel-default animated slideInUp">
    <div class="panel-heading">
        Tabla de Presupuestos registrados
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover centered" id="presupuestos-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Generado por</th>
                    <th>Fecha</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i=0; $i <count($data); $i++) {                            
                 ?>
                <tr class="gradeU">
                    <td><?php print($data[$i]->id); ?></td>
                    <td><?php print($data[$i]->razon_social); ?></td>
                    <td>$ <?php print($data[$i]->total); ?></td>
                    <td><?php print($data[$i]->nombre); ?></td>
                    <td><?php print($data[$i]->fecha_creado); ?></td>
                    <td class="center">
                        <a style="color:green;text-decoration: none;" href="" id="pdf_presupuesto" onclick="pdf('<?php print($data[$i]->id) ?>');">
                            <i style="color:#F44336;" class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
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
<!-- <script src="js/accion_presupuesto.js"></script> -->

