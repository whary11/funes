<h4 class="success">Nuevo Presupuesto</h4>
<br><br>
<?php 
    require_once("../controladores/conexion/conn.php");
    $db = new conexion();
    $q = "SELECT * FROM clientes_funes";
    $data = $db->leeTabla($q);

 ?>
<form role="form" class="row animated bounceIn" id="formPresupuesto" method="POST">
    <div class="form-group col-md-12 cliente">
        <label for="cliente">Cliente</label>
        <select class="form-control" name="cliente" id="cliente">
        	<option>Seleccione Cliente</option>
        	<?php 
                for($i=0;$i<count($data);$i++){ 
                    print('<option value="'.$data[$i]->cuit.'">'.utf8_encode($data[$i]->razon_social).'</option>');
                }
             ?>
        </select>
    </div>

    <div class="llmadaproductos">
        <div class="form-group col-md-6 cliente">
            <label for="producto">Producto</label>
            <select class="form-control producto" name="producto" id="producto">
                <option>Seleccione un Producto</option>
                <?php 
                    $q = "SELECT * FROM productos_funes";
                    $data = $db->leeTabla($q);
                    for($i=0;$i<count($data);$i++){ 
                        print('<option value="'.$data[$i]->codigo.'">'.utf8_encode($data[$i]->descripcion).'</option>');
                    }
                 ?>
            </select>
        </div>
        <div class="form-group col-md-3 condicioniva">
            <label for="condicioniva">Precio</label>
            <input type="number" class="form-control precio" disabled name="precio">
        </div>
        <div class="form-group col-md-3 condicioniva">
            <label for="condicioniva">Id</label>
            <input type="number" class="form-control id" disabled name="id">
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-send"></span>
                Generear
            </button>
        </div>
</form>
        