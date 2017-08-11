
<h3>Nuevo Producto</h3>
<br><br>
<form role="form" class="row animated bounceIn" id="formProductos" method="POST">
    <div class="form-group col-md-10 codigo">
        <label for="codigo">Código de producto</label>
        <input type="text" class="form-control" placeholder="Escribe aquí..." name="codigo" id="codigo">
    </div>
    <div class="form-group col-md-10 precio">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" placeholder="Escribe aquí..." name="precio" id="precio">
    </div>
    <div class="form-group col-md-10 descripcion">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" rows="3" name="descripcion" id="descripcion"></textarea>
    </div>
    <div class="col-md-12">
    	<button type="submit" class="btn btn-primary">
    		<span class="glyphicon glyphicon-send"></span>
    		 Guardar
    	</button>
    </div>
</form>

