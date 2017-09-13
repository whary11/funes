<?php 

function html($idPresupuesto, $cliente, $mensaje, $remitente)
{
	$html ='<table border="0" cellspacing="0" cellpadding="0" style="max-width:600px">
      <tbody><tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr><td align="left"></td></tr></tbody></table></td></tr><tr height="16">
          </tr><tr><td><table bgcolor="#7F838B" width="100%" border="0" cellspacing="0" cellpadding="0" 
            style="min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px">
             <tbody style="padding:10px;"><tr><td height="72px" colspan="3"></td></tr><tr><td width="32px"></td>
                <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:24px;color:#ffffff;line-height:1.25">
                  Presupuesto / Proforma N° 1070 -  '.$idPresupuesto.'</td><td width="32px"></td></tr><tr><td height="18px" colspan="3">
                    </td></tr></tbody></table></td></tr><tr><td>
                      <table bgcolor="#FAFAFA" width="100%" border="0" cellspacing="0" cellpadding="0" 
                        style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;
                          border-bottom-left-radius:3px;border-bottom-right-radius:3px">
                            <tbody><tr height="16px"><td width="32px" rowspan="3"></td><td></td><td width="32px" rowspan="3"></td></tr><tr>
                              <td><table style="min-width:300px" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
                                <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-bottom:4px">
                                  <h3>'.$cliente.':</h3></td></tr>
                                  <tr>
                                  <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;
                                    color:#202020;line-height:1.5;padding:4px 0">
                                      Gracias por contactarnos, enviamos adjunto el documento solicitado. <br>Ante cualquier consulta comuniquese con nosotros.
                                        </td>
                                     </tr>
                                        <tr>
                                        <td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-top:28px">
                                          <b>'.$mensaje.'</b><br><br>
                                            Atte.<br>'.$remitente.'.
                                    </td>
                                    </tr>
                                            <tr height="16px">
                                            <td>
                                              <br> <img src="http://drive.google.com/uc?export=view&id=0B90Lde1p9VqqbjhJdThCQ0JIY1JNdnR0YjFveFBINjFqWlFJ"alt="Logo funes"><br><b>FUNES | AGRO-MAQUINARIA | MAQUINARIA -VIAL | AUTOMOTORES</b><br>
                                                <br>Juan B. Justo 10500 <br>Bº Guiñazú - 5145 - Córdoba<br>Tel./Fax:(0351) - 4998781 - 4909900
                                                </td>
                                                  </tr><tr><td><table style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:12px;color:#b9b9b9;line-height:1.5"><tbody>
                                                    <tr><td></td></tr></tbody>
                                                      </table></td></tr></tbody></table></td></tr><tr height="32px"></tr></tbody></table>
                                                        </td></tr>
                                                        <tr height="16" style="font-size:small;color:green;"><br><br>
                                                        <td>CUIDAR EL AMBIENTE ES RESPONSABILIDAD DE TODOS. Antes de imprimir este mail,
                                                          piense si es estrictamente necesario C En caso de documentos borrador, imprima 2 páginas por hoja en modo doble faz.
                                                          </td>
                                                          </tr>
                                                            <tr><td style="max-width:600px;font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#bcbcbc;line-height:1.5">
                                                              </td></tr><tr><td><table style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#666666;line-height:18px;
                                                                padding-bottom:10px"><tbody><tr><td></tr><tr><td>
                                                                  <div style="direction:ltr;text-align:left">© 2017 Funes, Todos los derechos reservado.
                                                                    <br>Plantilla tomada de Gloogle</div></td></tr></tbody></table></td></tr></tbody></table>';

                                                                    return $html;
}


print(html("18-3204", "Luis Fernando Raga", "Nada aún", "Omar Raga"));




 ?>