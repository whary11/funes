<?php 
	require_once '../mpdf60/mpdf.php';
	$html = '<style>
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
  font-size: 10px;
}
.descripcion{
  text-align:justify;
  padding:5px;
  font-size: 10px;
}

  </style>
  <table>
  <thead>
    <tr>
        <th rowspan="3" colspan="3"><img src="img/logo-funes.png" alt="Logo Funes" style="border-right: 0,5px solid black;"><br></th>
        <th colspan="7" >AGRO MAQUINARIA</th>
        <th colspan="2" class="fondo-celda borde-celda">FECHA</th>
        <th colspan="2" class="fondo-celda borde-celda">19/06/2017
    </th>
    <tr>
      <th colspan="7">VIAL MAQUINARIA</th>
      <th colspan="2" class="fondo-celda borde-celda">PRESUPUESTO No</th>
      <th colspan="2" class="fondo-celda borde-celda">1020-161</th>
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
            <td colspan="11" class="borde-celda descripcion">Enredes</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda borde-celda descripcion">CUIT / CUIL</td>
            <td colspan="4" class="borde-celda descripcion">1077444356</td>
            <td colspan="4" class="borde-celda fondo-celda descripcion">CONDICION IVA</td>
            <td colspan="3" class="borde-celda descripcion">RESP. INSC.</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda1 borde-celda descripcion">DIREC. COMERC.</td>
            <td colspan="11" class="borde-celda descripcion">Cali - Colombia</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda1 borde-celda descripcion">CONTACTO</td>
            <td colspan="4" class="borde-celda descripcion">LUIS FERNANDO RAGA RENTERIA</td>
            <td colspan="4" class="fondo-celda1 borde-celda descripcion">TELÉFONO</td>
            <td colspan="3" class="borde-celda descripcion">3127049308</td>
          </tr>
          <tr>
            <td colspan="3" class="fondo-celda borde-celda descripcion">E-MAIL</td>
            <td colspan="4" class="borde-celda descripcion">WHARY11@GMAIL.COM</td>
            <td colspan="4" class="fondo-celda borde-celda descripcion">VENDEDOR</td>
            <td colspan="3" class="borde-celda descripcion descripcion">LEANDRO FUNES</td>
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
          <!-- Productos -->



          <tr class="fondo-celda borde-celda">
          	<td class="borde-celda formato" headers="codigo">1</td>
          	<td colspan="9" class="borde-celda descripcion">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
          	<td class="borde-celda fondo-celda formato" >1</td>
          	<td class="borde-celda fondo-celda formato">$10000</td>
          	<td class="borde-celda fondo-celda formato">10.50</td>
          	<td class="borde-celda fondo-celda formato" headers="subtotal">$10000</td>
          </tr>
          



          
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
              <td colspan="2" class="borde-celda"> $62.375,07 </td>
            </tr>
            <tr>
              <td colspan="2" class="borde-celda">IVA 10.5%</td>
              <td colspan="2" class="borde-celda"> $5.653,85  </td>
            </tr>
            <tr>
              <td colspan="2" class="borde-celda">IVA 21%</td>
              <td colspan="2" class="borde-celda"> $1.791,07  </td>
            </tr>
            <tr>
              <td colspan="2" class="borde-celda" style="background-color: black;color: white;">TOTAL</td>
              <td colspan="2" class="borde-celda"> $69.819,99 </td>
            </tr>
          </tfoot>
      </table>';

	$mpdf = new mPDF("c","A4");
	// $css = file_get_contents('css/index.css');
	// $mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);

	$mpdf->Output("Ya.pdf","I");



 ?>