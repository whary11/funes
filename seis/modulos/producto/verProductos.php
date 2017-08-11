 <?php 
    require_once("controladores/conexion/conn.php");
	$db = new conexion();
	$q = "SELECT * FROM productos_funes";
	$data = $db->leeTabla($q);
 ?>


<div class="panel panel-default">
    <div class="panel-heading">
        Tabla de Productos registrados
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Código</th>
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
                    <td><?php print(utf8_encode($data[$i]->descripcion)); ?></td>
                    <td class="center">
                        <a style="color: green; text-decoration:none;" href="modulos/producto/editar.php?id=<?php print($data[$i]->id); ?>">
                            <i style="font-size:20px;display:block;text-align:center;" class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td class="center">
                        <a style="color:red;text-decoration: none;" href="eliminar.php?id=<?php print($data[$i]->id); ?>">
                            <i style="font-size:20px;display:block;text-align:center;" class="fa fa-minus-circle"></i>
                        </a>
                    </td>
                </tr>
                 <?php 
                    }
                  ?>
            </tbody>
        </table>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
                    <!-- /.panel -->