<?php 
	require_once '../mpdf60/mpdf.php';
	$html = '<style>
    /*Clases para modificar el formato del pdf*/
table{
  border-collapse: collapse;
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

  </style>
  <table>
  <thead>
    <tr>
        <th rowspan="3" colspan="3"><img src="img/logo-funes.png" alt="Logo Funes"><br></th>
        <th colspan="4" class="border-izquierdo">AGRO MAQUINARIA</th>
        <th class="fondo-celda borde-celda">FECHA</th>
        <th class="fondo-celda borde-celda">19/06/2017
    </th>
    <tr>
      <th colspan="4">VIAL MAQUINARIA</th>
      <th class="fondo-celda borde-celda">PRESUPUESTO No</th>
      <th class="fondo-celda borde-celda">1020-161</th>
    </tr>
      <tr>
        <th colspan="4">REPUESTO Y ACCESORIOS</th>
        <th class="fondo-celda borde-celda">VALIDEZ POR</th>
        <th class="fondo-celda borde-celda">15 DÍAS</th>
      </tr>
    <tr>
      <th colspan="9" class="fondo-celda1 borde-celda">Av. Juan B justo 10500 - CP 5019 - Juarez Celman - Cba - Ar Tel 0351 4998781 - administracion@grupofunes.com.ar</th>
    </tr>
    <tr>
      <th colspan="9" class="borde-celda fondo-celda">FUNES SRL / CUIT 30-71246263-5 / ING BRUTOS Nº 280-693-880 / INICIO DE ACTIVIDAD 01/09/12</th>
    </tr>
    <tr>
      <th colspan="9" style="padding:7px"></th> 
    </tr>
    </tr>
  </thead>
        <tbody>
          <tr>
            <td class="fondo-celda1 borde-celda">CLIENTE</td>
            <td colspan="8" class="borde-celda">Enredes</td>
          </tr>
          <tr>
            <td class="fondo-celda borde-celda">CUIT / CUIL</td>
            <td colspan="5" class="borde-celda">1077444356</td>
            <td class="borde-celda fondo-celda">CONDICION IVA</td>
            <td colspan="2" class="borde-celda">RESP. INSC.</td>
          </tr>
          <tr>
            <td class="fondo-celda1 borde-celda">DIREC. COMERC.</td>
            <td colspan="8" colspan="3" class="borde-celda">Cali - Colombia</td>
          </tr>
          <tr>
            <td class="fondo-celda1 borde-celda">CONTACTO</td>
            <td colspan="5" class="borde-celda">LUIS FERNANDO RAGA RENTERIA</td>
            <td class="fondo-celda1 borde-celda">TELÉFONO</td>
            <td colspan="2" class="borde-celda">3127049308</td>
          </tr>
          <tr>
            <td class="fondo-celda borde-celda">E-MAIL</td>
            <td colspan="5" class="borde-celda">WHARY11@GMAIL.COM</td>
            <td class="fondo-celda borde-celda">VENDEDOR</td>
            <td colspan="2" class="borde-celda">LEANDRO FUNES</td>
          </tr>
          <tr>
            <td class="fondo-celda borde-celda">C. PAGO</td>
            <td colspan="5" class="borde-celda">CHEQUES PROPIOS 0-30-60 DÍAS</td>
            <td class="fondo-celda borde-celda">ENTREGA</td>
            <td colspan="2" class="borde-celda">INMEDIATA</td>
          </tr>
          <tr>
            <td style="padding:10px;"></td>
          </tr>
          <tr style="background-color:black;color: white;"  >
          	<td class="borde-celda" id="codigo" style="color:white;">CÓDIGO</td>
          	<td colspan="4" class="borde-celda" id="descripcion" style="color:white;">DESCRIPCIÓN</td>
          	<td class="borde-celda" id="cantidad" style="color:white;">CANTIDAD</td>
          	<td class="borde-celda" id="precio" style="color:white;">PREC. UNIT</td>
          	<td class="borde-celda" id="iva" style="color:white;">IVA %</td>
          	<td class="borde-celda" id="subtotal" style="color:white;">SUBTOTAL</td>
          </tr>
          <!-- Productos -->
          <tr class="fondo-celda borde-celda">
          	<td class="borde-celda" headers="codigo">1</td>
          	<td colspan="4" class="borde-celda">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
          	<td class="borde-celda fondo-celda" >1</td>
          	<td class="borde-celda fondo-celda">$10000</td>
          	<td class="borde-celda fondo-celda">10.50</td>
          	<td class="borde-celda fondo-celda" headers="subtotal">$10000</td>
          </tr>
          <tr class="fondo-celda borde-celda">
            <td class="borde-celda fondo-celda1" headers="codigo">1</td>
            <td colspan="4" class="borde-celda fondo-celda1" headers="descripcion">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
            <td class="borde-celda fondo-celda1" headers="cantidad">1</td>
            <td class="borde-celda fondo-celda1" headers="precio">$10000</td>
            <td class="borde-celda fondo-celda1" headers="iva">10.50</td>
            <td class="borde-celda fondo-celda1" headers="subtotal">$10000</td>
          </tr>
          <tr class="fondo-celda borde-celda">
            <td class="borde-celda" headers="codigo">1</td>
            <td colspan="4" class="borde-celda" headers="descripcion">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
            <td class="borde-celda" headers="cantidad">1</td>
            <td class="borde-celda" headers="precio">$10000</td>
            <td class="borde-celda" headers="iva">10.50</td>
            <td class="borde-celda" headers="subtotal">$10000</td>
          </tr>
          <tr class="fondo-celda borde-celda">
            <td class="borde-celda" headers="codigo">1</td>
            <td colspan="4" class="borde-celda" headers="descripcion">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
            <td class="borde-celda" headers="cantidad">1</td>
            <td class="borde-celda" headers="precio">$10000</td>
            <td class="borde-celda" headers="iva">10.50</td>
            <td class="borde-celda" headers="subtotal">$10000</td>
          </tr>
          <tr class="fondo-celda borde-celda">
            <td class="borde-celda" headers="codigo">1</td>
            <td colspan="4" class="borde-celda" headers="descripcion">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
            <td class="borde-celda" headers="cantidad">1</td>
            <td class="borde-celda" headers="precio">$10000</td>
            <td class="borde-celda" headers="iva">10.50</td>
            <td class="borde-celda" headers="subtotal">$10000</td>
          </tr>
          <tr class="fondo-celda borde-celda">
            <td class="borde-celda" headers="codigo">1</td>
            <td colspan="4" class="borde-celda" headers="descripcion">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
            <td class="borde-celda" headers="cantidad">1</td>
            <td class="borde-celda" headers="precio">$10000</td>
            <td class="borde-celda" headers="iva">10.50</td>
            <td class="borde-celda" headers="subtotal">$10000</td>
          </tr>
          <tr class="fondo-celda borde-celda">
            <td class="borde-celda" headers="codigo">1</td>
            <td colspan="4" class="borde-celda" headers="descripcion">ACOPLADO RURAL - MARCA COMOFRA MEDIDAS: 3,0 MTS DE LARGO POR 1,70 MTS DE ANCHO. CON BARANDAS, LATERALES REVATIBLES. PRECIO IVA 10,5% INCLUIDO. PUESTO EN CORDOBA</td>
            <td class="borde-celda" headers="cantidad">1</td>
            <td class="borde-celda" headers="precio">$10000</td>
            <td class="borde-celda" headers="iva">10.50</td>
            <td class="borde-celda" headers="subtotal">$10000</td>
          </tr>
        </tbody>
          <!-- footer -->
          <tfoot>
            <tr>
              <td style="padding:10px;"></td>
            </tr>
            <tr class="espacio-celdas">
              <td rowspan="4" colspan="6" class="borde-celda espacio-celdas">Observaciones</td>
              <td colspan="" rowspan="4"></td>
              <td class="borde-celda">NETO </td>
              <td class="borde-celda"> $62.375,07 </td>
            </tr>
            <tr>
              <td class="borde-celda">IVA 10.5%</td>
              <td class="borde-celda"> $5.653,85  </td>
            </tr>
            <tr>
              <td class="borde-celda">IVA 21%</td>
              <td class="borde-celda"> $1.791,07  </td>
            </tr>
            <tr>
              <td class="borde-celda" style="background-color: black;color: white;">TOTAL</td>
              <td class="borde-celda"> $69.819,99 </td>
            </tr>
          </tfoot>
      </table>';

	$mpdf = new mPDF("c","A4");
	// $css = file_get_contents('css/index.css');
	// $mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);

	$mpdf->Output("Ya.pdf","I");



 ?>