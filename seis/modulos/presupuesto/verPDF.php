<?php 
session_start();
 if (isset($_SESSION['usuario']) AND isset($_GET['presupuesto_id'])) {
    # code...
   
  $html = "";
	require_once '../../controladores/pdf/mpdf60/mpdf.php';
  require_once("../../controladores/conexion/conn.php");
  $db = new conexion();
  $db1 = new conexion();
  $q = "SELECT presupuestos_funes.id,clientes_funes.razon_social,clientes_funes.cuit,clientes_funes.domicilio_comercial,clientes_funes.contacto1,clientes_funes.telefono1,clientes_funes.correo1, presupuestos_funes.total,usuarios_funes.nombre as usuario,presupuestos_funes.fecha_creado,condicion_iva.nombre as iva,sistema.logo FROM presupuestos_funes
        INNER JOIN usuarios_funes ON usuarios_funes.id = presupuestos_funes.usuario_id
        INNER JOIN clientes_funes ON clientes_funes.id = presupuestos_funes.cliente_id
        INNER JOIN condicion_iva ON condicion_iva.id = clientes_funes.condicion_iva_id
        INNER JOIN sistema ON sistema.id = usuarios_funes.sistema_id
        WHERE presupuestos_funes.id = '$_GET[presupuesto_id]'";
  $data = $db->leeTabla($q);
  $query = "SELECT * FROM `usuarios_funes` WHERE id='$_SESSION[usuario]' ";
    $datos = $db1->leeTabla($query);

	$html .= '<style>
    /*Clases para modificar el formato del pdf*/
table{
  border-collapse: collapse;
}
#codigo,#descripcion,#cantidad,#precio,#iva,#subtotal{
  text-align: center;
  padding:5px;
}
.fondo-celda{
  background-color:#efefef;
}
.border-izquierdo{
  border-left: 1px solid #000; 
}

.fondo-celda1{
  background-color: #dddbdb;
  table-layout:
}

.borde-celda{
  border: 1px solid gray;
}

.espacio-celdas{
  margin-top: 30px;
}
.formato{
  text-align: center;
  padding:5px;
  font-size: 12px;
}
.descripcion{
  text-align:justify;
  padding:5px;
  font-size: 12px;
}
.font th{
  font-weight:normal;
}

  </style>';

$html.='
  <table>
  <thead>
    <tr class="font">
        <th rowspan="3" colspan="3" ><img src="../../img/sistemas/'.$data[0]->logo.'" alt="Logo Funes" style="border-right: 0,5px solid black;"><br></th>
        <th colspan="7">AGRO MAQUINARIA</th>
        <th colspan="2" class="fondo-celda borde-celda">FECHA</th>
        <th colspan="2" class="fondo-celda borde-celda">'.$data[0]->fecha_creado.'</th>
    <tr>
      <th colspan="7">VIAL MAQUINARIA</th>
      <th colspan="2" class="fondo-celda borde-celda">PRESUPUESTO No</th>
      <th colspan="2" class="fondo-celda borde-celda">'.$datos[0]->codigo.' - '.$data[0]->id.'</th>
    </tr>
      <tr>
        <th colspan="7">REPUESTO Y ACCESORIOS</th>
        <th colspan="2" class="fondo-celda borde-celda">VALIDEZ POR</th>
        <th colspan="2" class="fondo-celda borde-celda">15 DÍAS</th>
      </tr>
    <tr>
      <th colspan="14" class="fondo-celda1 borde-celda">Av. Juan B justo 10500 - CP 5019 - Juarez Celman - Cba - Ar Tel 0351 4998781 - administracion@grupofunes.com.ar</th>
    </tr>
    <tr>
      <th colspan="14" class="borde-celda fondo-celda">FUNES SRL / CUIT 30-71246263-5 / ING BRUTOS Nº 280-693-880 / INICIO DE ACTIVIDAD 01/09/12</th>
    </tr>
    <tr>
      <th colspan="14" style="padding:7px"></th> 
    </tr>
    </tr>
  </thead>
        <tbody>
          <tr>
            <td colspan="3" class="fondo-celda1 borde-celda descripcion">CLIENTE</td>
            <td colspan="11" class="borde-celda descripcion">'.$data[0]->razon_social.'</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda borde-celda descripcion">CUIT / CUIL</td>
            <td colspan="4" class="borde-celda descripcion">'.$data[0]->cuit.'</td>
            <td colspan="4" class="borde-celda fondo-celda descripcion">CONDICION IVA</td>
            <td colspan="3" class="borde-celda descripcion">'.$data[0]->iva.'</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda1 borde-celda descripcion">DIREC. COMERC.</td>
            <td colspan="11" class="borde-celda descripcion">'.$data[0]->domicilio_comercial.'</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda1 borde-celda descripcion">CONTACTO</td>
            <td colspan="4" class="borde-celda descripcion">'.$data[0]->contacto1.'</td>
            <td colspan="4" class="fondo-celda1 borde-celda descripcion">TELÉFONO</td>
            <td colspan="3" class="borde-celda descripcion">'.$data[0]->telefono1.'</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda borde-celda descripcion">E-MAIL</td>
            <td colspan="4" class="borde-celda descripcion">'.$data[0]->correo1.'</td>
            <td colspan="4" class="fondo-celda borde-celda descripcion">VENDEDOR</td>
            <td colspan="3" class="borde-celda descripcion descripcion">'.$data[0]->usuario.'</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda borde-celda descripcion">C. PAGO</td>
            <td colspan="4" class="borde-celda descripcion">CHEQUES PROPIOS 0-30-60 DÍAS</td>
            <td colspan="4" class="fondo-celda borde-celda">ENTREGA</td>
            <td colspan="3" class="borde-celda descripcion">INMEDIATA</td>
          </tr>
          <tr>
            <td colspan="14" style="padding:10px;"></td>
          </tr>
          
          
          <tr style="background-color:black;color: white;"  >
          	<td colspan="1" class="borde-celda" id="codigo" style="color:white;">CÓDIGO</td>
          	<td colspan="9" class="borde-celda" id="descripcion" style="color:white;">DESCRIPCIÓN</td>
          	<td colspan="1" class="borde-celda" id="cantidad" style="color:white;">CANTIDAD</td>
          	<td colspan="1" class="borde-celda" id="precio" style="color:white;">PREC. UNIT</td>
          	<td colspan="1" class="borde-celda" id="iva" style="color:white;">IVA %</td>
          	<td colspan="1" class="borde-celda" id="subtotal" style="color:white;">SUBTOTAL</td>
          </tr>
          <!-- Productos -->';
          $db = new conexion();
          $q = "SELECT productos_funes.codigo,productos_funes.descripcion,detalle_presupuesto_funes.cantidad,detalle_presupuesto_funes.precio FROM detalle_presupuesto_funes
        INNER JOIN productos_funes ON productos_funes.codigo = detalle_presupuesto_funes.codigo_producto
        WHERE detalle_presupuesto_funes.id_presupuesto = '$_GET[presupuesto_id]'";
        $data = $db->leeTabla($q);
        $total = 0;
        for ($i=0; $i <count($data); $i++) { 
          $subtotal = $data[$i]->cantidad * $data[$i]->precio;
          $html .='
          <tr class="fondo-celda borde-celda">
          	<td class="borde-celda formato" headers="codigo">'.$data[$i]->codigo.'</td>
          	<td colspan="9" class="borde-celda descripcion">'.$data[$i]->descripcion.'</td>
          	<td class="borde-celda fondo-celda formato" >'.$data[$i]->cantidad.'</td>
          	<td class="borde-celda fondo-celda formato">$'.number_format($data[$i]->precio).'</td>
          	<td class="borde-celda fondo-celda formato">10.50</td>
          	<td class="borde-celda fondo-celda formato" headers="subtotal">$'.number_format($subtotal).'</td>
          </tr>';
          $total+=$subtotal;
          }
          $html.='
        </tbody>
          <!-- footer -->
          <tfoot>
            <tr>
              <td style="padding:10px;"></td>
            </tr>
            <tr class="espacio-celdas">
              <td rowspan="4" colspan="10" class="borde-celda espacio-celdas">Observaciones</td>
              <td  rowspan="4"></td>
              <td colspan="2" class="borde-celda">NETO </td>
              <td colspan="2" class="borde-celda"> ¿¿ </td>
            </tr>
            <tr>
              <td colspan="2" class="borde-celda">IVA 10.5%</td>
              <td colspan="2" class="borde-celda"> ¿¿  </td>
            </tr>
            <tr>
              <td colspan="2" class="borde-celda">IVA 21%</td>
              <td colspan="2" class="borde-celda"> ¿¿  </td>
            </tr>
            <tr>
              <td colspan="2" class="borde-celda" style="background-color: black;color: white;">TOTAL</td>
              <td colspan="2" class="borde-celda"> $'.number_format($total).' </td>
            </tr>
          </tfoot>
      </table>';

	$mpdf = new mPDF();
  $mpdf->debug=false;
  // $mpdf->SetTitle($data[0]->razon_social);

	// $css = file_get_contents('css/index.css');
	// $mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);

	$mpdf->Output('hola_mundo'.".pdf","I");
}else{
  header("location: ver_presupuestos.php");
}

 ?>