
<h3>Nuevo Producto</h3>
<br><br>
<form role="form" class="row animated bounceIn limpiar" id="formProductos" method="POST">
    <div id="mensaje"></div>
    <div class="form-group col-md-10 codigo">
        <label for="codigo">Código de producto</label>
        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="codigo" id="codigo">
    </div>
    <div class="form-group col-md-10 precio">
        <label for="precio">Precio</label>
        <input type="text" class="form-control limpiar" placeholder="Escribe aquí..." name="precio" id="precio">
    </div>
    <div class="form-group col-md-10 descripcion">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control limpiar" rows="3" name="descripcion" id="descripcion"></textarea>
    </div>
    <div class="col-md-12">
    	<button type="submit" class="btn btn-primary">
    		<span class="glyphicon glyphicon-send"></span>
    		 Guardar
    	</button>
    </div>
</form>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/app/js/app.js"></script>
<!-- <script src="js/dropzone.js"></script> -->
