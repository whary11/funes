<h4 class="success">Nuevo Presupuesto</h4>
<div  id="alertas">
    <!-- Producto Agregado con éxito -->
</div>
<?php 
    require_once("../controladores/conexion/conn.php");
    $db = new conexion();
    $q = "SELECT * FROM clientes_funes";
    $data = $db->leeTabla($q);

 ?>
<form role="form" class="row animated bounceIn" id="formPresupuesto" method="POST">
    <div class="form-group col-md-12 clientes">
        <label for="cliente">Cliente</label>
        <select class="form-control" name="clientes" id="clientes">
        	<option>Seleccione un cliente</option>
        	<?php 
                for($i=0;$i<count($data);$i++){ 
                    print('<option value="'.$data[$i]->cuit.'">'.utf8_encode($data[$i]->razon_social).'</option>');
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
            <label for="condicioniva">Cuil o Cuit</label>
            <input type="text" class="form-control id limpiar" disabled name="id">
        </div>
        <div class="form-group col-md-3" id="agregar"> 
            <button id="nuevo" class="btn btn-primary" >
                <span class="glyphicon glyphicon-plus"></span>
                Agregar
            </button>
        </div>
        <div class="form-group col-md-3 desaparecer"> 
            <button id="generar" class="btn btn-suscces">
                <span class="glyphicon glyphicon-plus"></span>
                Generar
            </button>
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
                    <th>Cuil o Cuit</th>
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

