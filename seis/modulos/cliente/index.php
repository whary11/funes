<h3>Nuevo Cliente</h3>
	<form role="form" class="row animated fadeInDown" id="form_nuevocliente" method="POST">
	    <div class="form-group col-md-6 razon">
	        <label for="razon">Razón Social</label>
	        <input type="text" class="form-control" placeholder="Escribe aquí..." name="razon" id="razon">
	    </div>
	    <div class="form-group col-md-6 cuil">
	        <label for="cuil">CUIL o CUIT</label>
	        <input class="form-control" placeholder="Escribe aquí..." name="cuil" id="cuil">
	    </div>
	    <div class="form-group col-md-6 cliente">
	        <label for="cliente">Tipo Cliente</label>
	        <select class="form-control" name="cliente" id="cliente">
	        	<option>Seleccione un tipo de cliente</option>
	            <option>1</option>
	            <option>2</option>
	            <option>3</option>
	        </select>
	    </div>
	    <div class="form-group col-md-6 condicioniva">
	        <label for="condicioniva">Condición IVA</label>
	        <input type="text" class="form-control" placeholder="Escribe aquí..." id="condicioniva" name="condicioniva">
	    </div>
	    <div class="form-group col-md-6 direccion">
	        <label for="direccion">Dirección Comercial</label>
	        <input type="text" class="form-control" placeholder="Escribe aquí..." name="direccion" id="direccion">
	    </div>
	    <div class="form-group col-md-6 correo1">
	        <label for="telefono1">Correo Electrónico 1</label>
	        <input type="email" class="form-control" placeholder="Escribe aquí..." name="correo1" id="correo1">
	    </div>
		<div class="form-group col-md-6 telefono1">
	        <label for="telefono1">Teléfono 1</label>
	        <input type="phone" class="form-control" placeholder="Escribe aquí..." name="telefono1" id="telefono1">
	    </div>
	    <div class="form-group col-md-6 contacto1">
	        <label for="contacto1">Nombre Contacto Principal</label>
	        <input type="text" class="form-control" placeholder="Escribe aquí..." class="contacto1" id="contacto1">
	    </div>
		<div class="form-group col-md-6 whatsapp">
	        <label for="whatsapp">Whatsapp</label>
	        <input type="number" class="form-control" placeholder="Escribe aquí..." name="whatsapp" id="whatsapp">
	    </div>
	    <div class="form-group col-md-6 contacto2">
	        <label for="contacto2">Nombre Contacto 2</label>
	        <input type="text" class="form-control" placeholder="Escribe aquí..." name="contacto2" id="contacto2">
	    </div>
	    <div class="form-group col-md-6 correo2">
	        <label for="correo2">Correo Electrónico 2</label>
	        <input type="email" class="form-control" placeholder="Escribe aquí..." name="correo2" id="correo2">
	    </div>
	    <div class="form-group col-md-6 telefono2">
	        <label for="telefono2">Teléfono 2</label>
	        <input type="number" class="form-control" placeholder="Escribe aquí..." name="telefono2" id="telefono2">
	    </div>
	    <div class="form-group col-md-6 contacto3">
	        <label for="contacto3">Nombre Contacto 3</label>
	        <input type="text" class="form-control" placeholder="Escribe aquí..." name="contacto3" id="contacto3">
	    </div>
	    <div class="form-group col-md-6 correo3">
	        <label for="correo3">Correo Electrónico 3</label>
	        <input type="email" class="form-control" placeholder="Escribe aquí..." name="correo3" id="correo3">
	    </div>

	    <div class="form-group col-md-6 telefono3">
	        <label for="telefono3">Teléfono 3</label>
	        <input type="number" class="form-control" placeholder="Escribe aquí..." name="telefono3" id="telefono3">
	    </div>
	    <div class="col-md-12">
	    	<button type="submit" class="btn btn-primary">
	    		<span class="glyphicon glyphicon-send"></span>
	    		 Guardar
	    	</button>
	    </div>
	</form>